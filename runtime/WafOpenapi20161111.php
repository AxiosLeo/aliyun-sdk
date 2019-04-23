<?php

namespace aliyun\sdk\services\WafOpenapi20161111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20161111
 *
 * @package aliyun\sdk\services\WafOpenapi20161111
 * @method ReleaseInstance ReleaseInstance()
 * @method CreateInstance CreateInstance()
 * @method UpgradeInstance UpgradeInstance()
 * @method RenewInstance RenewInstance()
 */
class V20161111
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ReleaseInstance extends Request
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
 * @method $this setPackageCode($packageCode)
 * @method string getPackageCode()
 * @method $this setExtDomainPackage($extDomainPackage)
 * @method int getExtDomainPackage()
 * @method $this setExtBandwidth($extBandwidth)
 * @method int getExtBandwidth()
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
 * @method $this setPackageCode($packageCode)
 * @method string getPackageCode()
 * @method $this setExtDomainPackage($extDomainPackage)
 * @method int getExtDomainPackage()
 * @method $this setExtBandwidth($extBandwidth)
 * @method int getExtBandwidth()
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
 */
class RenewInstance extends Request
{

}