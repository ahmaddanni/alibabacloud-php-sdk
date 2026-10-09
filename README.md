# Integrate Alibaba Cloud with your PHP application.

[![Tests](https://github.com/dew-serverless/acs-sdk-php/actions/workflows/tests.yml/badge.svg)](https://github.com/dew-serverless/acs-sdk-php/actions/workflows/tests.yml)
[![MIT License](https://img.shields.io/github/license/dew-serverless/acs-sdk-php)](https://github.com/dew-serverless/acs-sdk-php)
[![OpenAPI metadata](https://img.shields.io/badge/OpenAPI-20251213-blue)](https://github.com/dew-serverless/acs-sdk-php)
[![Total Downloads](https://img.shields.io/packagist/dt/dew-serverless/acs-sdk-php)](https://github.com/dew-serverless/acs-sdk-php)
[![Release](https://img.shields.io/github/v/release/dew-serverless/acs-sdk-php)](https://github.com/dew-serverless/acs-sdk-php)

⚠️ **Important:** This package is in the early stages of development and may
undergo breaking changes at any time. If you plan to use this SDK in a
production environment, please be aware that such changes could impact your
application.

The unofficial SDK utilizes Alibaba Cloud [OpenAPI metadata] and is designed
to be HTTP client-agnostic. We aim to keep it simple, reusable, and
maintainable, given the wide range of services offered by Alibaba Cloud. Even
if you prefer to craft your own API requests, we can assist with request
signing, sparing you from the complexities of signature calculations.

## Quickstart

### Install

The SDK can be installed using _Composer_ with the following command:

```bash
composer require dew-serverless/acs-sdk-php
```

### Usage

Clients follow the naming convention of `<Product>Client`. For example, with
VPC, let's create a new network for our awesome project:

```php
use Dew\Acs\Vpc\VpcClient;

$client = new VpcClient([
    'region' => 'cn-shenzhen',
    'credentials' => [
        'key' => '<YOUR_ACCESS_KEY_ID>',
        'secret' => '<YOUR_ACCESS_KEY_SECRET>',
    ],
]);

$result = $client->createVpc([
    'RegionId' => 'cn-shenzhen',
]);

echo $result['VpcId']; // retrieve the newly-created VPC ID.
```

You can pass arguments to the service as an array. For details on additional
fields you can include, please refer to the official product documentation.

[OpenAPI metadata]: https://api.alibabacloud.com/openmeta/guide
