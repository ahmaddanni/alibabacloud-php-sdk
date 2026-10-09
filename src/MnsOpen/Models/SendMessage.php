<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Models;

/**
 * @phpstan-type TSendMessage array{MessageId: string, MessageBodyMD5: string}
 */
final readonly class SendMessage
{
    /**
     * Create a new model instance.
     */
    public function __construct(
        public string $messageId,
        public string $messageBodyMd5
    ) {
        //
    }

    /**
     * Create a model from the data payload.
     *
     * @param  TSendMessage  $data
     */
    public static function make(array $data): static
    {
        return new static(
            $data['MessageId'],
            $data['MessageBodyMD5']
        );
    }
}
