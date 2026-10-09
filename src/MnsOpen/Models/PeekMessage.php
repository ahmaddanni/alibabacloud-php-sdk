<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Models;

/**
 * @phpstan-type TPeekMessage array{
 *   MessageId: string,
 *   MessageBodyMD5: string,
 *   MessageBody: string,
 *   EnqueueTime: int,
 *   FirstDequeueTime: int,
 *   DequeueCount: int,
 *   Priority: int
 * }
 */
final readonly class PeekMessage
{
    /**
     * Create a new model instance.
     */
    public function __construct(
        public string $messageId,
        public string $messageBodyMd5,
        public string $messageBody,
        public int $enqueueTime,
        public int $firstDequeueTime,
        public int $dequeueCount,
        public int $priority
    ) {
        //
    }

    /**
     * Create a model from the data payload.
     *
     * @param  TPeekMessage  $data
     */
    public static function make(array $data): static
    {
        return new static(
            $data['MessageId'],
            $data['MessageBodyMD5'],
            $data['MessageBody'],
            (int) $data['EnqueueTime'],
            (int) $data['FirstDequeueTime'],
            (int) $data['DequeueCount'],
            (int) $data['Priority']
        );
    }
}
