<?php

declare(strict_types=1);

namespace Woda\String\StringFilter;

final class MultipleStringFilter implements StringFilterInterface
{
    /** @var list<StringFilterInterface> */
    private array $filter;

    public function __construct(StringFilterInterface ...$filter)
    {
        $this->filter = $filter;
    }

    public function __invoke(string $string): string
    {
        foreach ($this->filter as $filter) {
            $string = ($filter)($string);
        }
        return $string;
    }
}
