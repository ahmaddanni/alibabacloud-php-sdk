<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Cells;

/**
 * @see https://www.alibabacloud.com/help/en/tablestore/developer-reference/plainbuffer
 */
enum Tag: int
{
    case HEADER = 0x75;
    case PK = 0x01;
    case ATTR = 0x02;
    case CELL = 0x03;
    case CELL_NAME = 0x04;
    case CELL_VALUE = 0x05;
    case CELL_OP = 0x06;
    case CELL_TS = 0x07;
    case DELETE_MARKER = 0x08;
    case ROW_CHECKSUM = 0x09;
    case CELL_CHECKSUM = 0x0A;
}
