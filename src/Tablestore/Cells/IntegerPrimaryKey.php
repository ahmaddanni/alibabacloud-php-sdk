<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class IntegerPrimaryKey extends Cell implements PrimaryKey, HasValue
{
    use IsIntegerCell;
}
