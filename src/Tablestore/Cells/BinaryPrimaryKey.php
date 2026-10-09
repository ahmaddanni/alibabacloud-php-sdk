<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class BinaryPrimaryKey extends Cell implements PrimaryKey, HasValue
{
    use IsBinaryCell;
}
