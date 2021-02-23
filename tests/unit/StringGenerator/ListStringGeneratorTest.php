<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringGenerator;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use Woda\String\StringGenerator\ListStringGenerator;

class ListStringGeneratorTest extends TestCase
{
    public function testGenerateThrowsExceptionWhenListIsEmpty(): void
    {
        $this->expectException(RuntimeException::class);

        (new ListStringGenerator([]))->generate();
    }

    public function testGeneratesCodesFromList(): void
    {
        $generator = new ListStringGenerator(['foo', 'bar']);

        self::assertSame('foo', $generator->generate());
        self::assertSame('bar', $generator->generate());
    }
}
