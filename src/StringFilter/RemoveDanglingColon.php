<?php

declare(strict_types=1);

namespace Woda\String\StringFilter;

final class RemoveDanglingColon implements StringFilterInterface
{
    public function __invoke(string $string): string
    {
        return preg_replace(
            '/:$/',
            '',
            $string
        );
    }
}