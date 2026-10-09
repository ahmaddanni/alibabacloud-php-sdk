<?php

declare(strict_types=1);

namespace Dew\Acs\Sls;

use Dew\Acs\Sls\Messages\Log;
use Dew\Acs\Sls\Messages\LogContent;
use Dew\Acs\Sls\Messages\LogGroup;
use Dew\Acs\Sls\Messages\LogTag;

/**
 * @phpstan-type TLogTag array{
 *   Key: string,
 *   Value: string
 * }
 * @phpstan-type TLogContent array{
 *   Key: string,
 *   Value: string
 * }
 * @phpstan-type TLogItem array{
 *   Time: positive-int,
 *   Contents: TLogContent[],
 *   TimeNs?: positive-int
 * }
 * @phpstan-type TLogGroup array{
 *   Topic?: string,
 *   Source?: string,
 *   LogTags?: TLogTag[],
 *   Logs: TLogItem[],
 *   MachineUuid?: string,
 * }
 */
final class Protobuf
{
    /**
     * @param  TLogGroup  $group
     */
    public static function toLogGroup(array $group): LogGroup
    {
        $message = new LogGroup();

        if (isset($group['Topic'])) {
            $message->setTopic($group['Topic']);
        }

        if (isset($group['Source'])) {
            $message->setSource($group['Source']);
        }

        if (isset($group['LogTags'])) {
            $tags = [];

            foreach ($group['LogTags'] as $tag) {
                $tags[] = static::toLogTag($tag);
            }

            $message->setTags($tags);
        }

        if (isset($group['Logs'])) {
            $logs = [];

            foreach ($group['Logs'] as $log) {
                $logs[] = static::toLogItem($log);
            }

            $message->setLogs($logs);
        }

        if (isset($group['MachineUuid'])) {
            $message->setMachineUuid($group['MachineUuid']);
        }

        return $message;
    }

    /**
     * @param  TLogItem  $log
     */
    public static function toLogItem(array $log): Log
    {
        $message = new Log();

        if (isset($log['Time'])) {
            $message->setTime($log['Time']);
        }

        if (isset($log['Contents'])) {
            $contents = [];

            foreach ($log['Contents'] as $content) {
                $contents[] = static::toLogContent($content);
            }

            $message->setContents($contents);
        }

        if (isset($log['TimeNs'])) {
            $message->setTimeNs($log['TimeNs']);
        }

        return $message;
    }

    /**
     * @param  TLogContent  $content
     */
    public static function toLogContent(array $content): LogContent
    {
        if (! isset($content['Key'])) {
            throw new \InvalidArgumentException(
                'The log content should have a "Key" field.'
            );
        }

        if (! isset($content['Value'])) {
            throw new \InvalidArgumentException(
                'The log content should have a "Value" field.'
            );
        }

        return (new LogContent())
            ->setKey($content['Key'])
            ->setValue($content['Value']);
    }

    /**
     * @param  TLogTag  $tag
     */
    public static function toLogTag(array $tag): LogTag
    {
        if (! isset($tag['Key'])) {
            throw new \InvalidArgumentException(
                'The log tag should have a "Key" field.'
            );
        }

        if (! isset($tag['Value'])) {
            throw new \InvalidArgumentException(
                'The log tag should have a "Value" field.'
            );
        }

        return (new LogTag())
            ->setKey($tag['Key'])
            ->setValue($tag['Value']);
    }
}
