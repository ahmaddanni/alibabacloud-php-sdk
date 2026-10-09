<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore\Schema;

use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\DefinedColumnType;
use Dew\Acs\Tablestore\Messages\PrimaryKeyOption;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;
use Dew\Acs\Tablestore\Messages\PrimaryKeyType;
use Dew\Acs\Tablestore\Messages\ReservedThroughput;
use Dew\Acs\Tablestore\Messages\SSEKeyType;
use Dew\Acs\Tablestore\Messages\SSESpecification;
use Dew\Acs\Tablestore\Messages\TableOptions;
use Dew\Acs\Tablestore\Schema\Blueprint;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Blueprint::class)]
final class BlueprintTest extends TestCase
{
    public function test_integer_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->integer('integer')->toSchema();
        $this->assertInstanceOf(DefinedColumnSchema::class, $schema);
        $this->assertSame('integer', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_INTEGER, $schema->getType());
    }

    public function test_integer_column_primary_key(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->integer('integer')->primary()->toSchema();
        $this->assertInstanceOf(PrimaryKeySchema::class, $schema);
        $this->assertSame('integer', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_INTEGER, $schema->getType());
        $this->assertSame(0, $schema->getOption());
    }

    public function test_integer_column_auto_increment(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->integer('integer')->autoIncrement()->toSchema();
        $this->assertInstanceOf(PrimaryKeySchema::class, $schema);
        $this->assertSame('integer', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_INTEGER, $schema->getType());
        $this->assertSame(PrimaryKeyOption::AUTO_INCREMENT, $schema->getOption());
    }

    public function test_auto_increment_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->autoIncrement('integer')->toSchema();
        $this->assertInstanceOf(PrimaryKeySchema::class, $schema);
    }

    public function test_double_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->double('double')->toSchema();
        $this->assertInstanceOf(DefinedColumnSchema::class, $schema);
        $this->assertSame('double', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_DOUBLE, $schema->getType());
    }

    public function test_boolean_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->boolean('boolean')->toSchema();
        $this->assertInstanceOf(DefinedColumnSchema::class, $schema);
        $this->assertSame('boolean', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_BOOLEAN, $schema->getType());
    }

    public function test_string_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->string('string')->toSchema();
        $this->assertInstanceOf(DefinedColumnSchema::class, $schema);
        $this->assertSame('string', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_STRING, $schema->getType());
    }

    public function test_string_column_primary_key(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->string('string')->primary()->toSchema();
        $this->assertInstanceOf(PrimaryKeySchema::class, $schema);
        $this->assertSame('string', $schema->getName());
        $this->assertSame(PrimaryKeyType::STRING, $schema->getType());
    }

    public function test_binary_column(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->binary('binary')->toSchema();
        $this->assertInstanceOf(DefinedColumnSchema::class, $schema);
        $this->assertSame('binary', $schema->getName());
        $this->assertSame(DefinedColumnType::DCT_BLOB, $schema->getType());
    }

    public function test_binary_column_primary_key(): void
    {
        $blueprint = new Blueprint();
        $schema = $blueprint->binary('binary')->primary()->toSchema();
        $this->assertInstanceOf(PrimaryKeySchema::class, $schema);
        $this->assertSame('binary', $schema->getName());
        $this->assertSame(PrimaryKeyType::BINARY, $schema->getType());
    }

    public function test_throughput_read_reservation(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->throughput);
        $blueprint->reserveRead(2);
        $this->assertInstanceOf(ReservedThroughput::class, $blueprint->throughput);
        $this->assertSame(2, $blueprint->throughput->getCapacityUnit()->getRead());
        $this->assertFalse($blueprint->throughput->getCapacityUnit()->hasWrite());
    }

    public function test_throughput_write_reservation(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->throughput);
        $blueprint->reserveWrite(1);
        $this->assertInstanceOf(ReservedThroughput::class, $blueprint->throughput);
        $this->assertSame(1, $blueprint->throughput->getCapacityUnit()->getWrite());
        $this->assertFalse($blueprint->throughput->getCapacityUnit()->hasRead());
    }

    public function test_throughput_reservation(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->throughput);
        $blueprint->reserveRead(2)->reserveWrite(1);
        $this->assertInstanceOf(ReservedThroughput::class, $blueprint->throughput);
        $this->assertSame(2, $blueprint->throughput->getCapacityUnit()->getRead());
        $this->assertSame(1, $blueprint->throughput->getCapacityUnit()->getWrite());
    }

    public function test_ttl(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->ttl(86400);
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertSame(86400, $blueprint->options->getTimeToLive());
    }

    public function test_ttl_forever(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->forever();
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertSame(-1, $blueprint->options->getTimeToLive());
    }

    public function test_max_versions(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->maxVersions(2);
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertSame(2, $blueprint->options->getMaxVersions());
    }

    public function test_version_offset_in(): void
    {
        $twoDays = 86400 * 2;
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->versionOffsetIn($twoDays);
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertSame($twoDays, $blueprint->options->getDeviationCellVersionInSec());
    }

    public function test_allow_update_allow(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->allowUpdate();
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertTrue($blueprint->options->getAllowUpdate());
    }

    public function test_allow_update_deny(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->options);
        $blueprint->allowUpdate(false);
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertFalse($blueprint->options->getAllowUpdate());
    }

    public function test_encryption_kms(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->encryption);
        $blueprint->encryptWithKms();
        $this->assertInstanceOf(SSESpecification::class, $blueprint->encryption);
        $this->assertTrue($blueprint->encryption->getEnable());
        $this->assertSame(SSEKeyType::SSE_KMS_SERVICE, $blueprint->encryption->getKeyType());
    }

    public function test_encryption_byok(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->encryption);
        $blueprint->encryptWith('key-id', 'my-role');
        $this->assertInstanceOf(SSESpecification::class, $blueprint->encryption);
        $this->assertTrue($blueprint->encryption->getEnable());
        $this->assertSame(SSEKeyType::SSE_BYOK, $blueprint->encryption->getKeyType());
        $this->assertSame('key-id', $blueprint->encryption->getKeyId());
        $this->assertSame('my-role', $blueprint->encryption->getRoleArn());
    }

    public function test_encryption_none(): void
    {
        $blueprint = new Blueprint();
        $this->assertNull($blueprint->encryption);
        $blueprint->withoutEncryption();
        $this->assertNull($blueprint->encryption);
    }

    public function test_table_options_set_multiple(): void
    {
        $blueprint = new Blueprint();
        $blueprint->maxVersions(1)->ttl(600);
        $this->assertInstanceOf(TableOptions::class, $blueprint->options);
        $this->assertSame(1, $blueprint->options->getMaxVersions());
        $this->assertSame(600, $blueprint->options->getTimeToLive());
        $this->assertFalse($blueprint->options->hasAllowUpdate());
    }
}
