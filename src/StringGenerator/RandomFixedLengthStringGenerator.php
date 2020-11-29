<?php

declare(strict_types=1);

namespace Woda\String\StringGenerator;

use function count;
use function rand;
use function str_split;

class RandomFixedLengthStringGenerator implements StringGeneratorInterface
{
    private const DEFAULT_LENGTH = 10;
    private const DEFAULT_ALLOWED_CHARACTERS = 'abcdefghijklmnpqrstuvwxyz123456789';
    private int $length;
    private string $allowedCharacters;

    public function __construct(?int $length = null, ?string $allowedCharacters = null)
    {
        $this->length = $length ?? self::DEFAULT_LENGTH;
        $this->allowedCharacters = $allowedCharacters ?? self::DEFAULT_ALLOWED_CHARACTERS;
    }

    public function generate(): string
    {
        $allowedCharacters = str_split($this->allowedCharacters);
        $allowedCharacterLength = count($allowedCharacters) - 1;
        $code = '';
        for ($i = 0; $i < $this->length; $i++) {
            $code .= $allowedCharacters[rand(0, $allowedCharacterLength)];
        }
        return $code;
    }
}
