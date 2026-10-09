<?php

declare(strict_types=1);

namespace Dew\Acs\OpenApi;

enum ParameterLocation: string
{
    case HOST = 'host';
    case PATH = 'path';
    case QUERY = 'query';
    case HEADER = 'header';
    case BODY = 'body';
    case FORM = 'formData';
}
