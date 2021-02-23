<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\RemoveDoubleSquareBracketsStringFilter;

final class RemoveDoubleSquareBracketsStringFilterTest extends TestCase
{
    public function testName(): void
    {
        $filter = new RemoveDoubleSquareBracketsStringFilter();

        self::assertSame('[foo]', ($filter)('[foo]'));
        self::assertSame('foo', ($filter)('[[foo]]'));
        self::assertSame('[[foo', ($filter)('[[foo'));
        self::assertSame('foo]]', ($filter)('foo]]'));
        self::assertSame('[[foo]', ($filter)('[[foo]'));
        self::assertSame('[foo]]', ($filter)('[foo]]'));
    }
}
