<?php

namespace aliyun\sdk\services\HighDDos20160410;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160410
 *
 * @package aliyun\sdk\services\HighDDos20160410
 * @method DeleteLay4Rule DeleteLay4Rule()
 * @method CreateOrderInstance CreateOrderInstance()
 * @method CreateLay4Rule CreateLay4Rule()
 * @method DescribeDdosFlow DescribeDdosFlow()
 * @method ModifyDomain ModifyDomain()
 * @method CreateDomain CreateDomain()
 * @method ModifyWafConfig ModifyWafConfig()
 * @method DescribeWafAttackTypeStats DescribeWafAttackTypeStats()
 * @method DescribeDdosEvents DescribeDdosEvents()
 * @method DescribeWafAttackSourceStats DescribeWafAttackSourceStats()
 * @method UploadHttpsCert UploadHttpsCert()
 * @method DescribeDomains DescribeDomains()
 * @method ReleaseInstance ReleaseInstance()
 * @method CreateInstance CreateInstance()
 * @method ModifyCcConfig ModifyCcConfig()
 * @method DescribeWafAttackEvents DescribeWafAttackEvents()
 * @method UploadHttpsKey UploadHttpsKey()
 * @method DescribeCcFlow DescribeCcFlow()
 * @method DescribeWafAttackUrlStats DescribeWafAttackUrlStats()
 * @method DescribeLay4Rules DescribeLay4Rules()
 * @method DescribeCcEvents DescribeCcEvents()
 * @method DeleteDomain DeleteDomain()
 * @method ModifyLay4Rule ModifyLay4Rule()
 * @method UpgradeInstance UpgradeInstance()
 * @method RenewInstance RenewInstance()
 */
class V20160410
{
}

/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVipPort($vipPort)
 * @method string getVipPort()
 */
class DeleteLay4Rule extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($commodityCode)
 * @method string getCommodityCode()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setDurationUnit($durationUnit)
 * @method string getDurationUnit()
 * @method $this setOrderInstanceId($orderInstanceId)
 * @method string getOrderInstanceId()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setBaseBandwidth($baseBandwidth)
 * @method int getBaseBandwidth()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 * @method $this setAmount($amount)
 * @method int getAmount()
 */
class CreateOrderInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setVipPort($vipPort)
 * @method string getVipPort()
 * @method $this setSourcePort($sourcePort)
 * @method string getSourcePort()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 */
class CreateLay4Rule extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeDdosFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 */
class ModifyDomain extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setWafEnable($wafEnable)
 * @method int getWafEnable()
 * @method $this setCcEnable($ccEnable)
 * @method int getCcEnable()
 */
class CreateDomain extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method int getEnable()
 */
class ModifyWafConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 */
class DescribeWafAttackTypeStats extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDdosEvents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWafAttackSourceStats extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCert($cert)
 * @method string getCert()
 */
class UploadHttpsCert extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDomains extends Request
{

}/**
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method int getEnable()
 */
class ModifyCcConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWafAttackEvents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setKey($key)
 * @method string getKey()
 */
class UploadHttpsKey extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 */
class DescribeCcFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeWafAttackUrlStats extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeLay4Rules extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCcEvents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteDomain extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVipPort($vipPort)
 * @method string getVipPort()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 */
class ModifyLay4Rule extends Request
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