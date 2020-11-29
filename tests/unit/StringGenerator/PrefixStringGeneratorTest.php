<?php

declare(strict_types=1);

namespace Woda\Test\Unit\String\StringGenerator;

use PHPUnit\Framework\TestCase;
use Woda\String\StringGenerator\FixedStringGenerator;
use Woda\String\StringGenerator\PrefixStringGenerator;

class PrefixStringGeneratorTest extends TestCase
{
    private string $code = 'MyRandomString';
    private string $prefix = 'ThisIsMyPrefix';
    private PrefixStringGenerator $generator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->generator = new PrefixStringGenerator($this->prefix, new FixedStringGenerator($this->code));
    }

    public function testCodeIsPrefixed(): void
    {
        self::assertSame($this->prefix . $this->code, $this->generator->generate());
    }
}
