<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

/**
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/plainbuffer
 */
enum ValueType: int
{
    case INTEGER = 0x0;
    case DOUBLE = 0x1;
    case BOOLEAN = 0x2;
    case STRING = 0x3;
    case NULL = 0x6;
    case BLOB = 0x7;
    case INF_MIN = 0x9;
    case INF_MAX = 0xA;
    case AUTO_INCREMENT = 0xB;
}
