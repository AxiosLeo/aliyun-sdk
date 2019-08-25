<?php

namespace aliyun\sdk\services\Sas20161219;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20161219
 *
 * @package aliyun\sdk\services\Sas20161219
 * @method RefundInstance RefundInstance()
 * @method GetInstanceCount GetInstanceCount()
 * @method CreateInstance CreateInstance()
 * @method UpgradeInstance UpgradeInstance()
 * @method RenewInstance RenewInstance()
 */
class V20161219
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class RefundInstance extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class GetInstanceCount extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 * @method $this setBuyNumber($buyNumber)
 * @method int getBuyNumber()
 * @method $this setIsAutoRenew($isAutoRenew)
 * @method bool getIsAutoRenew()
 * @method $this setAutoRenewDuration($autoRenewDuration)
 * @method int getAutoRenewDuration()
 */
class CreateInstance extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 * @method $this setBuyNumber($buyNumber)
 * @method int getBuyNumber()
 */
class UpgradeInstance extends Request
{
}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setBuyNumber($buyNumber)
 * @method int getBuyNumber()
 */
class RenewInstance extends Request
{
}
