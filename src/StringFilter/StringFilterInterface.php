<?php

declare(strict_types=1);

namespace Woda\String\StringFilter;

interface StringFilterInterface
{
    public function __invoke(string $string): string;
}
