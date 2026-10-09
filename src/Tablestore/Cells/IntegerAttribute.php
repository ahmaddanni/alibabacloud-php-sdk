<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class IntegerAttribute extends Cell implements Attribute, HasValue
{
    use IsAttribute;
    use IsIntegerCell;

    /**
     * Set increment operation.
     */
    public function increment(): self
    {
        $this->setOperation(Operation::INCREMENT);

        return $this;
    }
}
