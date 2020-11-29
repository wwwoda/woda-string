<?php

declare(strict_types=1);

namespace Woda\String\StringGenerator;

class PrefixStringGenerator implements StringGeneratorInterface
{
    private string $prefix;
    private StringGeneratorInterface $generator;

    public function __construct(string $prefix, StringGeneratorInterface $generator)
    {
        $this->prefix = $prefix;
        $this->generator = $generator;
    }

    public function generate(): string
    {
        return $this->prefix . $this->generator->generate();
    }
}
