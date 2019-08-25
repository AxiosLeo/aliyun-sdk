<?php

namespace aliyun\sdk\services\WafOpenapi20170930;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170930
 *
 * @package aliyun\sdk\services\WafOpenapi20170930
 * @method DescribeDomainTransferConfig DescribeDomainTransferConfig()
 * @method DescribeQps DescribeQps()
 * @method GetQps GetQps()
 * @method GetQpsTotal GetQpsTotal()
 * @method DescribeTransferConfigInWork DescribeTransferConfigInWork()
 * @method DescribeDomainNames DescribeDomainNames()
 * @method ModifyDomainPackageCount ModifyDomainPackageCount()
 * @method DescribeHttpsCertInUse DescribeHttpsCertInUse()
 * @method DescribeNeedUpgradeDomainLimit DescribeNeedUpgradeDomainLimit()
 * @method DescribeDomains DescribeDomains()
 * @method ModifyDomainConfig ModifyDomainConfig()
 * @method DescribePackage DescribePackage()
 * @method CreateDomainConfig CreateDomainConfig()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeRegionStatus DescribeRegionStatus()
 * @method DeleteDomainConfig DeleteDomainConfig()
 * @method GetRegionList GetRegionList()
 * @method ModifyWafSwitch ModifyWafSwitch()
 * @method ModifyCertAndKey ModifyCertAndKey()
 * @method AppOpenAck AppOpenAck()
 */
class V20170930
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainTransferConfig extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setField($field)
 * @method array getField()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setStartMillisecond($startMillisecond)
 * @method int getStartMillisecond()
 * @method $this setEndMillisecond($endMillisecond)
 * @method int getEndMillisecond()
 */
class DescribeQps extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setf($f)
 * @method array getf()
 * @method $this setn($n)
 * @method string getn()
 * @method $this setx($x)
 * @method int getx()
 * @method $this sets($s)
 * @method int gets()
 * @method $this sete($e)
 * @method int gete()
 */
class GetQps extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setinstanceId($instanceId)
 * @method string getinstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setf($f)
 * @method array getf()
 * @method $this setn($n)
 * @method string getn()
 * @method $this setx($x)
 * @method int getx()
 * @method $this sets($s)
 * @method int gets()
 * @method $this sete($e)
 * @method int gete()
 */
class GetQpsTotal extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCheckRequestId($checkRequestId)
 * @method string getCheckRequestId()
 */
class DescribeTransferConfigInWork extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDomainNames extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomainPackageCount($domainPackageCount)
 * @method int getDomainPackageCount()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyDomainPackageCount extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeHttpsCertInUse extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeNeedUpgradeDomainLimit extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDomains extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setHttpPort($httpPort)
 * @method string getHttpPort()
 * @method $this setHttpsPort($httpsPort)
 * @method string getHttpsPort()
 * @method $this setRsType($rsType)
 * @method int getRsType()
 * @method $this setIsAccessProduct($isAccessProduct)
 * @method int getIsAccessProduct()
 * @method $this setLoadBalancing($loadBalancing)
 * @method int getLoadBalancing()
 * @method $this setHttpsRedirect($httpsRedirect)
 * @method int getHttpsRedirect()
 * @method $this setHttpToUserIp($httpToUserIp)
 * @method int getHttpToUserIp()
 * @method $this setIsNonStandardPort($isNonStandardPort)
 * @method int getIsNonStandardPort()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyDomainConfig extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribePackage extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setHttpPort($httpPort)
 * @method string getHttpPort()
 * @method $this setHttpsPort($httpsPort)
 * @method string getHttpsPort()
 * @method $this setRsType($rsType)
 * @method int getRsType()
 * @method $this setIsAccessProduct($isAccessProduct)
 * @method int getIsAccessProduct()
 * @method $this setLoadBalancing($loadBalancing)
 * @method int getLoadBalancing()
 * @method $this setHttpsRedirect($httpsRedirect)
 * @method int getHttpsRedirect()
 * @method $this setHttpToUserIp($httpToUserIp)
 * @method int getHttpToUserIp()
 * @method $this setIsNonStandardPort($isNonStandardPort)
 * @method int getIsNonStandardPort()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateDomainConfig extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceSource($instanceSource)
 * @method string getInstanceSource()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeRegionStatus extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteDomainConfig extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetRegionList extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setServiceOn($serviceOn)
 * @method int getServiceOn()
 */
class ModifyWafSwitch extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setHttpsCertId($httpsCertId)
 * @method string getHttpsCertId()
 * @method $this setHttpsCertName($httpsCertName)
 * @method string getHttpsCertName()
 */
class ModifyCertAndKey extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setServiceId($serviceId)
 * @method string getServiceId()
 * @method $this setAsyncMethod($asyncMethod)
 * @method string getAsyncMethod()
 * @method $this setAck($ack)
 * @method string getAck()
 */
class AppOpenAck extends Request
{
}
