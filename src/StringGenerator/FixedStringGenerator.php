<?php

declare(strict_types=1);

namespace Woda\String\StringGenerator;

final class FixedStringGenerator implements StringGeneratorInterface
{
    private string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function generate(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}
