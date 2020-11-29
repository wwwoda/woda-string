<?php

declare(strict_types=1);

namespace Woda\String\StringGenerator;

use RuntimeException;

use function array_shift;

class ListStringGenerator implements StringGeneratorInterface
{
    /** @var list<string> */
    private array $codes;

    /**
     * @param list<string> $codes
     */
    public function __construct(array $codes)
    {
        $this->codes = $codes;
    }

    public function generate(): string
    {
        $code = array_shift($this->codes);
        if ($code === null) {
            throw new RuntimeException('Not enough codes in the list to generate');
        }
        return $code;
    }
}
