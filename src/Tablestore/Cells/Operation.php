<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

enum Operation: int
{
    case DELETE_ALL_VERSIONS = 0x1;
    case DELETE_ONE_VERSION = 0x3;
    case INCREMENT = 0x4;
}
