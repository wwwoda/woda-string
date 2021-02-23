<?php

declare(strict_types=1);

namespace Woda\String\StringFilter;

use function Safe\preg_replace;

final class RemoveDoubleAngleBracketsStringFilter implements StringFilterInterface
{
    public function __invoke(string $string): string
    {
        return preg_replace(
            '/[<]{2}([^>]*)[>]{2}/',
            '$1',
            $string
        );
    }
}
