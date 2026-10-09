<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class DeleteAttribute extends Cell implements Attribute
{
    use IsAttribute;

    /**
     * Create an attribute instance.
     */
    public function __construct(
        protected string $name
    ) {
        $this->all();
    }

    /**
     * Delete all versions.
     */
    public function all(): self
    {
        $this->operation = Operation::DELETE_ALL_VERSIONS;
        $this->timestamp = null;

        return $this;
    }

    /**
     * Delete the specified version.
     */
    public function version(\DateTimeInterface|int $timestamp): self
    {
        $this->operation = Operation::DELETE_ONE_VERSION;
        $this->setTimestamp($timestamp);

        return $this;
    }
}
