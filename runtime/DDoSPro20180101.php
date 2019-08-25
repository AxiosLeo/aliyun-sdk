<?php

namespace aliyun\sdk\services\DDoSPro20180101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180101
 *
 * @package aliyun\sdk\services\DDoSPro20180101
 * @method ReleaseInstance ReleaseInstance()
 * @method CreateInstance CreateInstance()
 * @method UpgradeInstance UpgradeInstance()
 * @method RenewInstance RenewInstance()
 */
class V20180101
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
 * @method $this setLine($line)
 * @method int getLine()
 * @method $this setBaseBandwidth($baseBandwidth)
 * @method int getBaseBandwidth()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 * @method $this setDomainCount($domainCount)
 * @method int getDomainCount()
 * @method $this setLayer4RuleCount($layer4RuleCount)
 * @method int getLayer4RuleCount()
 * @method $this setBusinessBandwidth($businessBandwidth)
 * @method int getBusinessBandwidth()
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
 * @method $this setDomainCount($domainCount)
 * @method int getDomainCount()
 * @method $this setLayer4RuleCount($layer4RuleCount)
 * @method int getLayer4RuleCount()
 * @method $this setBusinessBandwidth($businessBandwidth)
 * @method int getBusinessBandwidth()
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
