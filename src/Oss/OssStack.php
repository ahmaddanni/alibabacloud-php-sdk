<?php

declare(strict_types=1);

namespace Dew\Acs\Oss;

use Dew\Acs\DocsStack;
use Dew\Acs\OpenApi\Api;

trait OssStack
{
    /**
     * @param  mixed[]  $arguments
     */
    #[\Override]
    protected function newDocsStack(Api $api, array $arguments): DocsStack
    {
        return parent::newDocsStack($api, $arguments)
            ->signing(new EnsureContentLengthExists());
    }
}
