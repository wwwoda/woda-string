<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\PregReplaceStringFilter;

class PregReplaceStringFilterTest extends TestCase
{
    public function testName(): void
    {
        $filter = new PregReplaceStringFilter(['/foo/'], ['bar']);

        self::assertSame('bar', ($filter)('foo'));
    }
}
