<?php

declare(strict_types=1);

namespace Dew\Acs\Signatures;

use Dew\Acs\OpenApi\Api;
use Dew\Acs\OpenApi\ApiDocs;

interface NeedsApiContext
{
    public function setApiContext(ApiDocs $docs, Api $api): void;
}
