<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\RemoveDoubleRoundBracketsStringFilter;

final class RemoveDoubleRoundBracketsStringFilterTest extends TestCase
{
    public function testName(): void
    {
        $filter = new RemoveDoubleRoundBracketsStringFilter();

        self::assertSame('(foo)', ($filter)('(foo)'));
        self::assertSame('foo', ($filter)('((foo))'));
        self::assertSame('((foo', ($filter)('((foo'));
        self::assertSame('foo))', ($filter)('foo))'));
        self::assertSame('((foo)', ($filter)('((foo)'));
        self::assertSame('(foo))', ($filter)('(foo))'));
    }
}
