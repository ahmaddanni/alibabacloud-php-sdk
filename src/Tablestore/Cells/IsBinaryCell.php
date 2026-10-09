<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

trait IsBinaryCell
{
    use IsStringCell;

    /**
     * The cell type.
     */
    #[\Override]
    public function type(): ValueType
    {
        return ValueType::BLOB;
    }
}
