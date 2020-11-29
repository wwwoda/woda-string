<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\MultipleStringFilter;
use Woda\String\StringFilter\PregReplaceStringFilter;

class MultipleStringFilterTest extends TestCase
{
    public function testName(): void
    {
        $filter = new MultipleStringFilter(
            new PregReplaceStringFilter(['/foo/'], ['bar']),
            new PregReplaceStringFilter(['/bar/'], ['baz'])
        );

        self::assertSame('baz', ($filter)('foo'));
    }
}
