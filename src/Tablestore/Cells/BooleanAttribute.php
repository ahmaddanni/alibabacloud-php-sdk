<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

final class BooleanAttribute extends Cell implements Attribute, HasValue
{
    use IsAttribute;
    use IsBooleanCell;
}
