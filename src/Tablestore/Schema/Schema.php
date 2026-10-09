<?php

declare(strict_types=1);

namespace Dew\Acs\Tablestore\Schema;

use Dew\Acs\Tablestore\Messages\DefinedColumnSchema;
use Dew\Acs\Tablestore\Messages\PrimaryKeySchema;

interface Schema
{
    /**
     * Represent the schema in Protobuf message.
     */
    public function toSchema(): PrimaryKeySchema|DefinedColumnSchema;
}
