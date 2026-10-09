<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\OpenApi;

use Dew\Acs\OpenApi\RefFinder;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(RefFinder::class)]
final class RefFinderTest extends TestCase
{
    public function test_find_array(): void
    {
        $finder = new RefFinder(['value' => 'foo']);
        $this->assertSame('foo', $finder->find('value'));
    }

    public function test_find_object(): void
    {
        $finder = new RefFinder((object) ['value' => 'foo']);
        $this->assertSame('foo', $finder->find('value'));
    }

    public function test_find_hashtag(): void
    {
        $finder = new RefFinder((object) ['value' => 'foo']);
        $this->assertSame('foo', $finder->find('#/value'));
    }

    public function test_find_nested(): void
    {
        $finder = new RefFinder(['users' => ['lizhineng' => (object) ['is_admin' => true]]]);
        $this->assertSame(true, $finder->find('#/users/lizhineng/is_admin'));
    }

    public function test_find_missing_value(): void
    {
        $finder = new RefFinder(['users' => []]);
        $this->assertSame(null, $finder->find('#/users/lizhineng'));
    }

    public function test_find_default(): void
    {
        $finder = new RefFinder(['users' => ['lizhineng' => []]]);
        $this->assertSame(false, $finder->find('#/users/lizhineng/is_admin', false));
    }
}
