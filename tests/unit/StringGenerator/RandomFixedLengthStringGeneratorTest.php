<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringGenerator;

use PHPUnit\Framework\TestCase;
use Woda\String\StringGenerator\RandomFixedLengthStringGenerator;

use function strlen;
use function strpos;

class RandomFixedLengthStringGeneratorTest extends TestCase
{
    public function testDefaultLength(): void
    {
        self::assertSame(10, strlen((new RandomFixedLengthStringGenerator())->generate()));
    }

    public function testLength(): void
    {
        $length = 23;

        $code = (new RandomFixedLengthStringGenerator($length))->generate();

        self::assertSame(strlen($code), $length);
    }

    public function testOnlyAllowedCharactersAreIncluded(): void
    {
        $code = (new RandomFixedLengthStringGenerator(1000, 'abc123'))->generate();

        self::assertMatchesRegularExpression('/^[abc123]{1000}$/', $code);
    }

    public function testFirstCharacterIsIncluded(): void
    {
        $code = (new RandomFixedLengthStringGenerator(1000, 'abc123'))->generate();

        self::assertNotFalse(strpos($code, 'a'));
    }

    public function testLastCharacterIsIncluded(): void
    {
        $code = (new RandomFixedLengthStringGenerator(1000, 'abc123'))->generate();

        self::assertNotFalse(strpos($code, '3'));
        self::assertSame(1000, strlen($code));
    }
}
