<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore;

use Dew\Acs\Tablestore\HexDumper;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(HexDumper::class)]
final class HexDumperTest extends TestCase
{
    public function test_dump(): void
    {
        $this->expectOutputString(<<<'EOF'
             0 : 61 62 63                                        [abc]

        EOF);
        $dumper = new HexDumper('abc');
        $dumper->dump();
    }

    public function test_dump_invisible_default(): void
    {
        $this->expectOutputString(<<<'EOF'
             0 : 61 0a 62 0a 63                                  [a.b.c]

        EOF);
        $dumper = new HexDumper("a\nb\nc");
        $dumper->dump();
    }

    public function test_dump_invisible_customization(): void
    {
        $this->expectOutputString(<<<'EOF'
             0 : 61 0a 62 0a 63                                  [a+b+c]

        EOF);
        $dumper = new HexDumper("a\nb\nc");
        $dumper->nonVisibleUsing('+')->dump();
    }

    public function test_dump_width_customization(): void
    {
        $this->expectOutputString(<<<'EOF'
             0 : 61 62 63 [abc]
             3 : 78 79 7a [xyz]

        EOF);
        $dumper = new HexDumper("abcxyz");
        $dumper->width(3)->dump();
    }

    public function test_dump_empty(): void
    {
        $this->expectOutputString(<<<'EOF'

        EOF);
        $dumper = new HexDumper('');
        $dumper->dump();
    }
}
