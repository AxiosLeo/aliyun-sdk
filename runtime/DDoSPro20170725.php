<?php

namespace aliyun\sdk\services\DDoSPro20170725;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170725
 *
 * @package aliyun\sdk\services\DDoSPro20170725
 * @method UpdatePortRule UpdatePortRule()
 * @method UploadCertificate UploadCertificate()
 * @method ModifyDDoSProtectConfig ModifyDDoSProtectConfig()
 * @method ModifyRealServers ModifyRealServers()
 * @method CreateCcCustomedRule CreateCcCustomedRule()
 * @method CreateDomain CreateDomain()
 * @method DescribeDomainSecurityConfig DescribeDomainSecurityConfig()
 * @method ModifyCcTemplate ModifyCcTemplate()
 * @method DescribeCnameAutoStatus DescribeCnameAutoStatus()
 * @method ModifyTransmitLine ModifyTransmitLine()
 * @method ModifyElasticBandwidth ModifyElasticBandwidth()
 * @method DescribeDdosIpConfig DescribeDdosIpConfig()
 * @method DescribeBackSourceCidr DescribeBackSourceCidr()
 * @method ModifyHealthCheckConfig ModifyHealthCheckConfig()
 * @method ModifyDomainBlackWhiteList ModifyDomainBlackWhiteList()
 * @method DescribeHealthCheckConfig DescribeHealthCheckConfig()
 * @method CreatePortRule CreatePortRule()
 * @method ModifyCcStatus ModifyCcStatus()
 * @method DeletePortRule DeletePortRule()
 * @method DescribeDomainConfigPage DescribeDomainConfigPage()
 * @method DescribeDdosPeakFlow DescribeDdosPeakFlow()
 * @method ModifyDomainProxy ModifyDomainProxy()
 * @method DeleteCcCustomedRule DeleteCcCustomedRule()
 * @method DescribePortRulePage DescribePortRulePage()
 * @method DescribeDdosFlowProportionDiagram DescribeDdosFlowProportionDiagram()
 * @method CreateTransmitLine CreateTransmitLine()
 * @method DeleteTransmitLine DeleteTransmitLine()
 * @method ModifyPersistenceTimeOut ModifyPersistenceTimeOut()
 * @method ModifyIpCnameStatus ModifyIpCnameStatus()
 * @method ConfigSwitchPriority ConfigSwitchPriority()
 * @method DescribeDdosAttackEvents DescribeDdosAttackEvents()
 * @method DescribeCcEvents DescribeCcEvents()
 * @method UpdateCcCustomedRule UpdateCcCustomedRule()
 * @method ModifyCcCustomStatus ModifyCcCustomStatus()
 * @method DescribeInstancePage DescribeInstancePage()
 * @method DescribeDdosAttackEventSourceIps DescribeDdosAttackEventSourceIps()
 * @method ListCcCustomedRule ListCcCustomedRule()
 * @method DeleteDomain DeleteDomain()
 * @method DescribeBizFlow DescribeBizFlow()
 * @method ModifySwitchMode ModifySwitchMode()
 * @method DescribeDdosAttackTypeChart DescribeDdosAttackTypeChart()
 * @method DescribeDomainBlackWhiteList DescribeDomainBlackWhiteList()
 */
class V20170725
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setRealServerList($realServerList)
 * @method string getRealServerList()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class UpdatePortRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setCertId($certId)
 * @method int getCertId()
 */
class UploadCertificate extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyDDoSProtectConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setRealServers($realServers)
 * @method array getRealServers()
 */
class ModifyRealServers extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMatchingRule($matchingRule)
 * @method string getMatchingRule()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setVisitCount($visitCount)
 * @method int getVisitCount()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setBlockingType($blockingType)
 * @method string getBlockingType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setBlockingTime($blockingTime)
 * @method int getBlockingTime()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class CreateCcCustomedRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setCcEnable($ccEnable)
 * @method bool getCcEnable()
 * @method $this setRealServer($realServer)
 * @method array getRealServer()
 * @method $this setProxyType($proxyType)
 * @method array getProxyType()
 * @method $this setIps($ips)
 * @method array getIps()
 */
class CreateDomain extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainSecurityConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setMode($mode)
 * @method int getMode()
 */
class ModifyCcTemplate extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeCnameAutoStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIps($ips)
 * @method array getIps()
 */
class ModifyTransmitLine extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class ModifyElasticBandwidth extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIps($ips)
 * @method array getIps()
 * @method $this setIndex($index)
 * @method int getIndex()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDdosIpConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeBackSourceCidr extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyHealthCheckConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setBlack($black)
 * @method array getBlack()
 * @method $this setWhite($white)
 * @method array getWhite()
 */
class ModifyDomainBlackWhiteList extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeHealthCheckConfig extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setBackPort($backPort)
 * @method int getBackPort()
 * @method $this setProxyType($proxyType)
 * @method string getProxyType()
 * @method $this setRealServerList($realServerList)
 * @method string getRealServerList()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class CreatePortRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyCcStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DeletePortRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeDomainConfigPage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosPeakFlow extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProxyType($proxyType)
 * @method array getProxyType()
 */
class ModifyDomainProxy extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteCcCustomedRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribePortRulePage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosFlowProportionDiagram extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIps($ips)
 * @method array getIps()
 * @method $this setRealServers($realServers)
 * @method array getRealServers()
 */
class CreateTransmitLine extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteTransmitLine extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyPersistenceTimeOut extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyIpCnameStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class ConfigSwitchPriority extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeDdosAttackEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeCcEvents extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMatchingRule($matchingRule)
 * @method string getMatchingRule()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setVisitCount($visitCount)
 * @method int getVisitCount()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setBlockingType($blockingType)
 * @method string getBlockingType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setBlockingTime($blockingTime)
 * @method int getBlockingTime()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class UpdateCcCustomedRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyCcCustomStatus extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setInstanceIdList($instanceIdList)
 * @method array getInstanceIdList()
 * @method $this setIpList($ipList)
 * @method array getIpList()
 */
class DescribeInstancePage extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeDdosAttackEventSourceIps extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListCcCustomedRule extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteDomain extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeBizFlow extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setMode($mode)
 * @method string getMode()
 */
class ModifySwitchMode extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosAttackTypeChart extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainBlackWhiteList extends Request
{
}
