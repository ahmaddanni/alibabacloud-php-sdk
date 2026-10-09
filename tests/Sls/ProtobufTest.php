<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\Messages\Log;
use Dew\Acs\Sls\Messages\LogContent;
use Dew\Acs\Sls\Messages\LogGroup;
use Dew\Acs\Sls\Protobuf;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Protobuf::class)]
final class ProtobufTest extends TestCase
{
    public function test_to_log_content(): void
    {
        $message = Protobuf::toLogContent(['Key' => 'foo', 'Value' => 'bar']);
        $this->assertInstanceOf(LogContent::class, $message);
        $this->assertSame('foo', $message->getKey());
        $this->assertSame('bar', $message->getValue());
    }

    public function test_to_log_content_missing_key(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The log content should have a "Key" field.');
        Protobuf::toLogContent(['Value' => 'foo']);
    }

    public function test_to_log_content_missing_value(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The log content should have a "Value" field.');
        Protobuf::toLogContent(['Key' => 'foo']);
    }

    public function test_to_log_item(): void
    {
        $now = time();
        $message = Protobuf::toLogItem([
            'Time' => $now,
            'Contents' => [
                ['Key' => 'key1', 'Value' => 'value1'],
                ['Key' => 'key2', 'Value' => 'value2'],
            ],
        ]);
        $this->assertInstanceOf(Log::class, $message);
        $this->assertSame($now, $message->getTime());
        $this->assertCount(2, $message->getContents());
    }

    public function test_to_log_item_time_ns(): void
    {
        $message = Protobuf::toLogItem([
            'Time' => time(),
            'Contents' => [['Key' => 'foo', 'Value' => 'bar']],
            'TimeNs' => 123456789,
        ]);
        $this->assertInstanceOf(Log::class, $message);
        $this->assertSame(123456789, $message->getTimeNs());
    }

    public function test_to_log_group(): void
    {
        $message = Protobuf::toLogGroup([
            'Logs' => [[
                'Time' => time(),
                'Contents' => [['Key' => 'foo', 'Value' => 'bar']],
            ]],
        ]);
        $this->assertInstanceOf(LogGroup::class, $message);
        $this->assertCount(1, $message->getLogs());
    }

    public function test_to_log_group_topic(): void
    {
        $message = Protobuf::toLogGroup([
            'Topic' => '__test',
            'Logs' => [[
                'Time' => time(),
                'Contents' => [['Key' => 'foo', 'Value' => 'bar']],
            ]],
        ]);
        $this->assertInstanceOf(LogGroup::class, $message);
        $this->assertSame('__test', $message->getTopic());
    }

    public function test_to_log_group_source(): void
    {
        $message = Protobuf::toLogGroup([
            'Source' => '__test',
            'Logs' => [[
                'Time' => time(),
                'Contents' => [['Key' => 'foo', 'Value' => 'bar']],
            ]],
        ]);
        $this->assertInstanceOf(LogGroup::class, $message);
        $this->assertSame('__test', $message->getSource());
    }

    public function test_to_log_group_tags(): void
    {
        $message = Protobuf::toLogGroup([
            'LogTags' => [
                ['Key' => 'foo', 'Value' => 'bar'],
            ],
            'Logs' => [[
                'Time' => time(),
                'Contents' => [['Key' => 'status', 'Value' => '0']],
            ]],
        ]);
        $this->assertInstanceOf(LogGroup::class, $message);
        $this->assertCount(1, $message->getTags());
    }

    public function test_to_log_group_machine_uuid(): void
    {
        $message = Protobuf::toLogGroup([
            'Logs' => [[
                'Time' => time(),
                'Contents' => [['Key' => 'status', 'Value' => '0']],
            ]],
            'MachineUuid' => '__test',
        ]);
        $this->assertInstanceOf(LogGroup::class, $message);
        $this->assertSame('__test', $message->getMachineUuid());
    }

    public function test_to_log_tag(): void
    {
        $message = Protobuf::toLogTag(['Key' => 'foo', 'Value' => 'bar']);
        $this->assertSame('foo', $message->getKey());
        $this->assertSame('bar', $message->getValue());
    }

    public function test_to_log_tag_missing_key(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The log tag should have a "Key" field.');
        Protobuf::toLogTag(['Value' => 'foo']);
    }

    public function test_to_log_tag_missing_value(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The log tag should have a "Value" field.');
        Protobuf::toLogTag(['Key' => 'foo']);
    }
}
