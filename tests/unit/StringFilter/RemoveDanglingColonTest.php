<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringFilter;

use PHPUnit\Framework\TestCase;
use Woda\String\StringFilter\RemoveDanglingColon;

final class RemoveDanglingColonTest extends TestCase
{
    public function testName(): void
    {
        $filter = new RemoveDanglingColon();

        self::assertSame('foo', ($filter)('foo:'));
    }
}
