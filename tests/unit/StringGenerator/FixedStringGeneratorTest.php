<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringGenerator;

use PHPUnit\Framework\TestCase;
use Woda\String\StringGenerator\FixedStringGenerator;

class FixedStringGeneratorTest extends TestCase
{
    public function testGeneratesFixedString(): void
    {
        self::assertSame('foo', (new FixedStringGenerator('foo'))->generate());
    }

    public function testSetCodeChangesGeneratedString(): void
    {
        $generator = new FixedStringGenerator('foo');
        $generator->setCode('bar');

        self::assertSame('bar', $generator->generate());
    }
}
