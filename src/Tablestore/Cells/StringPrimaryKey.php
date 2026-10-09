<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class StringPrimaryKey extends Cell implements PrimaryKey, HasValue
{
    use IsStringCell;
}
