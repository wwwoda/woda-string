<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\RemoveDoubleCurlyBracketsStringFilter;

final class RemoveDoubleCurlyBracketsStringFilterTest extends TestCase
{
    public function testName(): void
    {
        $filter = new RemoveDoubleCurlyBracketsStringFilter();

        self::assertSame('{foo}', ($filter)('{foo}'));
        self::assertSame('foo', ($filter)('{{foo}}'));
        self::assertSame('{{foo', ($filter)('{{foo'));
        self::assertSame('foo}}', ($filter)('foo}}'));
        self::assertSame('{{foo}', ($filter)('{{foo}'));
        self::assertSame('{foo}}', ($filter)('{foo}}'));
    }
}
