<?php

declare(strict_types=1);

namespace Woda\String\StringFilter;

final class PregReplaceStringFilter implements StringFilterInterface
{
    /** @var list<string> */
    private array $pattern;
    /** @var list<string> */
    private array $replacement;

    /**
     * @param list<string> $pattern
     * @param list<string> $replacement
     */
    public function __construct(array $pattern, array $replacement)
    {
        $this->pattern = $pattern;
        $this->replacement = $replacement;
    }

    public function __invoke(string $string): string
    {
        return \Safe\preg_replace($this->pattern, $this->replacement, $string);
    }
}
