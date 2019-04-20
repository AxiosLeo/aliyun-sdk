<?php

namespace aliyun\sdk\services\Ddoscoo20171228;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171228
 *
 * @package aliyun\sdk\services\Ddoscoo20171228
 * @method DescribeIpTraffic DescribeIpTraffic()
 * @method ConfigDomainCacheSwitch ConfigDomainCacheSwitch()
 * @method CreateLayer4Rule CreateLayer4Rule()
 * @method DeleteAsyncTask DeleteAsyncTask()
 * @method DescribeDomainAttackEvents DescribeDomainAttackEvents()
 * @method ConfigLayer7CCRule ConfigLayer7CCRule()
 * @method ConfigLayer7Rule ConfigLayer7Rule()
 * @method DescribeDomainCacheConfig DescribeDomainCacheConfig()
 * @method ConfigHealthCheck ConfigHealthCheck()
 * @method DeleteLayer7CCRule DeleteLayer7CCRule()
 * @method UntagResources UntagResources()
 * @method DescribeDomainAreaBlockConfig DescribeDomainAreaBlockConfig()
 * @method DescribleCertList DescribleCertList()
 * @method ListTagKeys ListTagKeys()
 * @method DescribleLayer7InstanceRelations DescribleLayer7InstanceRelations()
 * @method UpdateSupportContact UpdateSupportContact()
 * @method ConfigLayer7Cert ConfigLayer7Cert()
 * @method DeleteLayer7Rule DeleteLayer7Rule()
 * @method UnbindDDoSFlowPack UnbindDDoSFlowPack()
 * @method DescribeLayer4Rules DescribeLayer4Rules()
 * @method ConfigDomainCacheCustomRule ConfigDomainCacheCustomRule()
 * @method DescribeInstances DescribeInstances()
 * @method DisableLayer7CCRule DisableLayer7CCRule()
 * @method ConfigDomainAreaBlockSwitch ConfigDomainAreaBlockSwitch()
 * @method ConfigLayer4RuleAttribute ConfigLayer4RuleAttribute()
 * @method ModifyElasticBandWidth ModifyElasticBandWidth()
 * @method DescribeInstanceDetails DescribeInstanceDetails()
 * @method EmptyAutoCcBlackIpList EmptyAutoCcBlackIpList()
 * @method DescribeDDoSEvents DescribeDDoSEvents()
 * @method DescribeBackSourceCidr DescribeBackSourceCidr()
 * @method EmptySlsLogstore EmptySlsLogstore()
 * @method ConfigPortAutoCcStatus ConfigPortAutoCcStatus()
 * @method CreateLayer7Rule CreateLayer7Rule()
 * @method DescribeLogStoreExistStatus DescribeLogStoreExistStatus()
 * @method ConfigDomainAreaBlock ConfigDomainAreaBlock()
 * @method EnableLayer7CC EnableLayer7CC()
 * @method ConfigDomainPreciseAccessRule ConfigDomainPreciseAccessRule()
 * @method ConfigLayer4Rule ConfigLayer4Rule()
 * @method DescribeDomains DescribeDomains()
 * @method DescribeHealthCheckList DescribeHealthCheckList()
 * @method AddAutoCcWhiteIpList AddAutoCcWhiteIpList()
 * @method DescribeDomainCcProtectSwitch DescribeDomainCcProtectSwitch()
 * @method DescribeEcsInstance DescribeEcsInstance()
 * @method DescribeUnBlockCount DescribeUnBlockCount()
 * @method DescribeSlsAuthStatus DescribeSlsAuthStatus()
 * @method DescribeSupportQRCodeByInstanceId DescribeSupportQRCodeByInstanceId()
 * @method DescribeSlsLogstoreInfo DescribeSlsLogstoreInfo()
 * @method EmptyAutoCcWhiteIpList EmptyAutoCcWhiteIpList()
 * @method ConfigBlackhole ConfigBlackhole()
 * @method DescribeEcsIpModifyCount DescribeEcsIpModifyCount()
 * @method ConfigDomainAccessMode ConfigDomainAccessMode()
 * @method AddAutoCcBlackIpList AddAutoCcBlackIpList()
 * @method ReleaseEcsIp ReleaseEcsIp()
 * @method ReleaseInstance ReleaseInstance()
 * @method ListLayer7CustomPorts ListLayer7CustomPorts()
 * @method ConfigLayer7BlackWhiteList ConfigLayer7BlackWhiteList()
 * @method DeleteLayer4Rule DeleteLayer4Rule()
 * @method DisableLayer7CC DisableLayer7CC()
 * @method DescribeBatchSlsDispatchStatus DescribeBatchSlsDispatchStatus()
 * @method ConfigDomainCacheMode ConfigDomainCacheMode()
 * @method DescribePortAutoCcStatus DescribePortAutoCcStatus()
 * @method DescribeSlsEmptyCount DescribeSlsEmptyCount()
 * @method DescribeInstanceStatistics DescribeInstanceStatistics()
 * @method DescribeSlsOpenStatus DescribeSlsOpenStatus()
 * @method ConfigDomainBlackWhiteListSwitch ConfigDomainBlackWhiteListSwitch()
 * @method CreateAsyncTask CreateAsyncTask()
 * @method DeleteDomainPreciseAccessRule DeleteDomainPreciseAccessRule()
 * @method DescribeDomainAccessMode DescribeDomainAccessMode()
 * @method DescribeBlockStatus DescribeBlockStatus()
 * @method DescribeDomainQps DescribeDomainQps()
 * @method ListAsyncTask ListAsyncTask()
 * @method DescribeLayer4RuleAttributes DescribeLayer4RuleAttributes()
 * @method DeleteDomainCacheCustomRule DeleteDomainCacheCustomRule()
 * @method DescribeDDoSTraffic DescribeDDoSTraffic()
 * @method DescribeElasticBandwidthSpec DescribeElasticBandwidthSpec()
 * @method TagResources TagResources()
 * @method EnableLayer7CCRule EnableLayer7CCRule()
 * @method DescribeDomainQpsWithCache DescribeDomainQpsWithCache()
 * @method BindDDoSFlowPack BindDDoSFlowPack()
 * @method ConfigBlockStatus ConfigBlockStatus()
 * @method ConfigDomainAIProtectSwitch ConfigDomainAIProtectSwitch()
 * @method ConfigDomainAIProtectMode ConfigDomainAIProtectMode()
 * @method ModifyDomainOpsType ModifyDomainOpsType()
 * @method ConfigLayer7CCTemplate ConfigLayer7CCTemplate()
 * @method ModifyInstanceRemark ModifyInstanceRemark()
 * @method DescribeDomainPreciseAccessRule DescribeDomainPreciseAccessRule()
 * @method DeleteAutoCcWhiteIpList DeleteAutoCcWhiteIpList()
 * @method ConfigDomainPreciseAccessSwitch ConfigDomainPreciseAccessSwitch()
 * @method DescribeLayer7CCRules DescribeLayer7CCRules()
 * @method DescribeInstanceSpecs DescribeInstanceSpecs()
 * @method DescribeDomainSlsStatus DescribeDomainSlsStatus()
 * @method DescribeDefenseRecords DescribeDefenseRecords()
 * @method DescribeDDoSFlowPackList DescribeDDoSFlowPackList()
 * @method DescribeDomainList DescribeDomainList()
 * @method OpenDomainSlsConfig OpenDomainSlsConfig()
 * @method DescribeAutoCcBlackIpList DescribeAutoCcBlackIpList()
 * @method DescribeAutoCcIpCount DescribeAutoCcIpCount()
 * @method DeleteAutoCcBlackIpList DeleteAutoCcBlackIpList()
 * @method DescribeDefenseCountStatistics DescribeDefenseCountStatistics()
 * @method CloseDomainSlsConfig CloseDomainSlsConfig()
 * @method DescribeHealthCheckStatusList DescribeHealthCheckStatusList()
 * @method AddLayer7CCRule AddLayer7CCRule()
 * @method DescribeBlackholeStatus DescribeBlackholeStatus()
 * @method ListTagResources ListTagResources()
 * @method DescribeSimpleDomains DescribeSimpleDomains()
 * @method DescribeOpEntities DescribeOpEntities()
 * @method DescribeAutoCcWhiteIpList DescribeAutoCcWhiteIpList()
 */
class V20171228
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setEip($eip)
 * @method string getEip()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setQueryProtocol($queryProtocol)
 * @method string getQueryProtocol()
 */
class DescribeIpTraffic extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method int getEnable()
 */
class ConfigDomainCacheSwitch extends Request
{

}/**
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class CreateLayer4Rule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DeleteAsyncTask extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeDomainAttackEvents extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAct($act)
 * @method string getAct()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class ConfigLayer7CCRule extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProxyTypeList($proxyTypeList)
 * @method string getProxyTypeList()
 * @method $this setProxyTypes($proxyTypes)
 * @method array getProxyTypes()
 * @method $this setRsType($rsType)
 * @method int getRsType()
 * @method $this setRealServers($realServers)
 * @method array getRealServers()
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class ConfigLayer7Rule extends Request
{

}/**
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribeDomainCacheConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForwardProtocol($forwardProtocol)
 * @method string getForwardProtocol()
 * @method $this setFrontendPort($frontendPort)
 * @method int getFrontendPort()
 * @method $this setHealthCheck($healthCheck)
 * @method string getHealthCheck()
 */
class ConfigHealthCheck extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteLayer7CCRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 * @method $this setAll($all)
 * @method bool getAll()
 */
class UntagResources extends Request
{

}/**
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribeDomainAreaBlockConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribleCertList extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListTagKeys extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribleLayer7InstanceRelations extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setMobile($mobile)
 * @method string getMobile()
 */
class UpdateSupportContact extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCertId($certId)
 * @method int getCertId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setKey($key)
 * @method string getKey()
 */
class ConfigLayer7Cert extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteLayer7Rule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setId($id)
 * @method string getId()
 */
class UnbindDDoSFlowPack extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForwardProtocol($forwardProtocol)
 * @method string getForwardProtocol()
 * @method $this setFrontendPort($frontendPort)
 * @method int getFrontendPort()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeLayer4Rules extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRuleList($ruleList)
 * @method string getRuleList()
 */
class ConfigDomainCacheCustomRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setPageNo($pageNo)
 * @method string getPageNo()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setRemark($remark)
 * @method string getRemark()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class DescribeInstances extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DisableLayer7CCRule extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigDomainAreaBlockSwitch extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForwardProtocol($forwardProtocol)
 * @method string getForwardProtocol()
 * @method $this setFrontendPort($frontendPort)
 * @method int getFrontendPort()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigLayer4RuleAttribute extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ModifyElasticBandWidth extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribeInstanceDetails extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class EmptyAutoCcBlackIpList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setEip($eip)
 * @method string getEip()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeDDoSEvents extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLine($line)
 * @method string getLine()
 */
class DescribeBackSourceCidr extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class EmptySlsLogstore extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSwitch($switch)
 * @method string getSwitch()
 * @method $this setMode($mode)
 * @method string getMode()
 */
class ConfigPortAutoCcStatus extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRsType($rsType)
 * @method int getRsType()
 * @method $this setRules($rules)
 * @method string getRules()
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class CreateLayer7Rule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeLogStoreExistStatus extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegionList($regionList)
 * @method array getRegionList()
 */
class ConfigDomainAreaBlock extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class EnableLayer7CC extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRuleList($ruleList)
 * @method string getRuleList()
 * @method $this setExpires($expires)
 * @method int getExpires()
 */
class ConfigDomainPreciseAccessRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class ConfigLayer4Rule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setQueryDomainPattern($queryDomainPattern)
 * @method string getQueryDomainPattern()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeDomains extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class DescribeHealthCheckList extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWhiteList($whiteList)
 * @method string getWhiteList()
 * @method $this setExpireTime($expireTime)
 * @method int getExpireTime()
 */
class AddAutoCcWhiteIpList extends Request
{

}/**
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribeDomainCcProtectSwitch extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeEcsInstance extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeUnBlockCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsAuthStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeSupportQRCodeByInstanceId extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsLogstoreInfo extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class EmptyAutoCcWhiteIpList extends Request
{

}/**
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ConfigBlackhole extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeEcsIpModifyCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setAccessMode($accessMode)
 * @method int getAccessMode()
 */
class ConfigDomainAccessMode extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBlackList($blackList)
 * @method string getBlackList()
 * @method $this setExpireTime($expireTime)
 * @method int getExpireTime()
 */
class AddAutoCcBlackIpList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ReleaseEcsIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ReleaseInstance extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class ListLayer7CustomPorts extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setBlackList($blackList)
 * @method array getBlackList()
 * @method $this setWhiteList($whiteList)
 * @method array getWhiteList()
 */
class ConfigLayer7BlackWhiteList extends Request
{

}/**
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class DeleteLayer4Rule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DisableLayer7CC extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeBatchSlsDispatchStatus extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setMode($mode)
 * @method string getMode()
 */
class ConfigDomainCacheMode extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribePortAutoCcStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsEmptyCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribeInstanceStatistics extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsOpenStatus extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigDomainBlackWhiteListSwitch extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskType($taskType)
 * @method int getTaskType()
 * @method $this setTaskParams($taskParams)
 * @method string getTaskParams()
 */
class CreateAsyncTask extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRuleNameList($ruleNameList)
 * @method array getRuleNameList()
 */
class DeleteDomainPreciseAccessRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribeDomainAccessMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class DescribeBlockStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeDomainQps extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAsyncTask extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class DescribeLayer4RuleAttributes extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRuleNameList($ruleNameList)
 * @method array getRuleNameList()
 */
class DeleteDomainCacheCustomRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setEip($eip)
 * @method string getEip()
 */
class DescribeDDoSTraffic extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeElasticBandwidthSpec extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class TagResources extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class EnableLayer7CCRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeDomainQpsWithCache extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setId($id)
 * @method string getId()
 */
class BindDDoSFlowPack extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLines($lines)
 * @method array getLines()
 */
class ConfigBlockStatus extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigDomainAIProtectSwitch extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigDomainAIProtectMode extends Request
{

}/**
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 */
class ModifyDomainOpsType extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class ConfigLayer7CCTemplate extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class ModifyInstanceRemark extends Request
{

}/**
 * @method $this setDomainList($domainList)
 * @method array getDomainList()
 */
class DescribeDomainPreciseAccessRule extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWhiteList($whiteList)
 * @method string getWhiteList()
 */
class DeleteAutoCcWhiteIpList extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class ConfigDomainPreciseAccessSwitch extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeLayer7CCRules extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribeInstanceSpecs extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainSlsStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDefenseRecords extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDDoSFlowPackList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeDomainList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class OpenDomainSlsConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAutoCcBlackIpList extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 */
class DescribeAutoCcIpCount extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBlackList($blackList)
 * @method string getBlackList()
 */
class DeleteAutoCcBlackIpList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribeDefenseCountStatistics extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class CloseDomainSlsConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class DescribeHealthCheckStatusList extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAct($act)
 * @method string getAct()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class AddLayer7CCRule extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class DescribeBlackholeStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 */
class ListTagResources extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSimpleDomains extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setEntityType($entityType)
 * @method int getEntityType()
 * @method $this setEntityObject($entityObject)
 * @method string getEntityObject()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeOpEntities extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAutoCcWhiteIpList extends Request
{

}