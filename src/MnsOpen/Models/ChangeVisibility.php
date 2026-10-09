<?php

declare(strict_types=1);

namespace Dew\Acs\MnsOpen\Models;

/**
 * @phpstan-type TChangeVisibility array{
 *   ReceiptHandle: string,
 *   NextVisibleTime: string
 * }
 */
final readonly class ChangeVisibility
{
    /**
     * Create a new model instance.
     */
    public function __construct(
        public string $receiptHandle,
        public int $nextVisibleTime
    ) {
        //
    }

    /**
     * Create a model from the data payload.
     *
     * @param  TChangeVisibility  $data
     */
    public static function make(array $data): static
    {
        return new static(
            $data['ReceiptHandle'],
            (int) $data['NextVisibleTime']
        );
    }
}
