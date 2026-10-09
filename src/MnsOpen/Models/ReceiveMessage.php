<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Models;

/**
 * @phpstan-type TReceiveMessage array{
 *   MessageId: string,
 *   ReceiptHandle: string,
 *   MessageBodyMD5: string,
 *   MessageBody: string,
 *   EnqueueTime: string,
 *   NextVisibleTime: string,
 *   FirstDequeueTime: string,
 *   DequeueCount: string,
 *   Priority: string
 * }
 */
final readonly class ReceiveMessage
{
    /**
     * Create a new model instance.
     */
    public function __construct(
        public string $messageId,
        public string $receiptHandle,
        public string $messageBodyMd5,
        public string $messageBody,
        public int $enqueueTime,
        public int $nextVisibleTime,
        public int $firstDequeueTime,
        public int $dequeueCount,
        public int $priority
    ) {
        //
    }

    /**
     * Create a model from the data payload.
     *
     * @param  TReceiveMessage  $data
     */
    public static function make(array $data): static
    {
        return new static(
            $data['MessageId'],
            $data['ReceiptHandle'],
            $data['MessageBodyMD5'],
            $data['MessageBody'],
            (int) $data['EnqueueTime'],
            (int) $data['NextVisibleTime'],
            (int) $data['FirstDequeueTime'],
            (int) $data['DequeueCount'],
            (int) $data['Priority']
        );
    }
}
