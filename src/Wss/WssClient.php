<?php

declare(strict_types=1);

namespace Dew\Acs\Wss;

use Dew\Acs\AcsClient;

/**
 * @method \Dew\Acs\Result createMultiOrder(array $arguments = [])
 * @method \Http\Promise\Promise createMultiOrderAsync($arguments = [])
 * @method \Dew\Acs\Result describePackageDeductions(array $arguments = [])
 * @method \Http\Promise\Promise describePackageDeductionsAsync($arguments = [])
 * @method \Dew\Acs\Result modifyInstanceProperties(array $arguments = [])
 * @method \Http\Promise\Promise modifyInstancePropertiesAsync($arguments = [])
 * @method \Dew\Acs\Result describeDeliveryAddress(array $arguments = [])
 * @method \Http\Promise\Promise describeDeliveryAddressAsync($arguments = [])
 * @method \Dew\Acs\Result describeMultiPrice(array $arguments = [])
 * @method \Http\Promise\Promise describeMultiPriceAsync($arguments = [])
 */
final class WssClient extends AcsClient
{
    //
}
