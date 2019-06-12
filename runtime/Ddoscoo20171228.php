<?php

namespace aliyun\sdk\services\Ddoscoo20171228;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171228
 *
 * @package aliyun\sdk\services\Ddoscoo20171228
 * @method DescribeIpTraffic DescribeIpTraffic()
 * @method CreateLayer4Rule CreateLayer4Rule()
 * @method DeleteAsyncTask DeleteAsyncTask()
 * @method DescribeDomainAttackEvents DescribeDomainAttackEvents()
 * @method ConfigLayer7CCRule ConfigLayer7CCRule()
 * @method ConfigLayer7Rule ConfigLayer7Rule()
 * @method ConfigHealthCheck ConfigHealthCheck()
 * @method DeleteLayer7CCRule DeleteLayer7CCRule()
 * @method DescribleCertList DescribleCertList()
 * @method DescribleLayer7InstanceRelations DescribleLayer7InstanceRelations()
 * @method ConfigLayer7Cert ConfigLayer7Cert()
 * @method DeleteLayer7Rule DeleteLayer7Rule()
 * @method DescribeLayer4Rules DescribeLayer4Rules()
 * @method DescribeInstances DescribeInstances()
 * @method DisableLayer7CCRule DisableLayer7CCRule()
 * @method ConfigLayer4RuleAttribute ConfigLayer4RuleAttribute()
 * @method ModifyElasticBandWidth ModifyElasticBandWidth()
 * @method DescribeInstanceDetails DescribeInstanceDetails()
 * @method DescribeDDoSEvents DescribeDDoSEvents()
 * @method DescribeBackSourceCidr DescribeBackSourceCidr()
 * @method CreateLayer7Rule CreateLayer7Rule()
 * @method EnableLayer7CC EnableLayer7CC()
 * @method ConfigLayer4Rule ConfigLayer4Rule()
 * @method DescribeDomains DescribeDomains()
 * @method DescribeHealthCheckList DescribeHealthCheckList()
 * @method DescribeUnBlockCount DescribeUnBlockCount()
 * @method ConfigDomainAccessMode ConfigDomainAccessMode()
 * @method ReleaseInstance ReleaseInstance()
 * @method ListLayer7CustomPorts ListLayer7CustomPorts()
 * @method ConfigLayer7BlackWhiteList ConfigLayer7BlackWhiteList()
 * @method DeleteLayer4Rule DeleteLayer4Rule()
 * @method DisableLayer7CC DisableLayer7CC()
 * @method DescribeInstanceStatistics DescribeInstanceStatistics()
 * @method CreateAsyncTask CreateAsyncTask()
 * @method DescribeDomainAccessMode DescribeDomainAccessMode()
 * @method DescribeBlockStatus DescribeBlockStatus()
 * @method DescribeDomainQps DescribeDomainQps()
 * @method ListAsyncTask ListAsyncTask()
 * @method DescribeLayer4RuleAttributes DescribeLayer4RuleAttributes()
 * @method DescribeDDoSTraffic DescribeDDoSTraffic()
 * @method DescribeElasticBandwidthSpec DescribeElasticBandwidthSpec()
 * @method EnableLayer7CCRule EnableLayer7CCRule()
 * @method DescribeDomainQpsWithCache DescribeDomainQpsWithCache()
 * @method ConfigBlockStatus ConfigBlockStatus()
 * @method ConfigLayer7CCTemplate ConfigLayer7CCTemplate()
 * @method ModifyInstanceRemark ModifyInstanceRemark()
 * @method DescribeLayer7CCRules DescribeLayer7CCRules()
 * @method DescribeInstanceSpecs DescribeInstanceSpecs()
 * @method DescribeDefenseRecords DescribeDefenseRecords()
 * @method DescribeDomainList DescribeDomainList()
 * @method DescribeDefenseCountStatistics DescribeDefenseCountStatistics()
 * @method DescribeHealthCheckStatusList DescribeHealthCheckStatusList()
 * @method AddLayer7CCRule AddLayer7CCRule()
 * @method DescribeSimpleDomains DescribeSimpleDomains()
 * @method DescribeOpEntities DescribeOpEntities()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteLayer7CCRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 */
class DescribleCertList extends Request
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteLayer7Rule extends Request
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
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class EnableLayer7CC extends Request
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
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setAccessMode($accessMode)
 * @method int getAccessMode()
 */
class ConfigDomainAccessMode extends Request
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 * @method $this setTaskType($taskType)
 * @method int getTaskType()
 * @method $this setTaskParams($taskParams)
 * @method string getTaskParams()
 */
class CreateAsyncTask extends Request
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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
 */
class DescribeDomainList extends Request
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
 * @method $this setListeners($listeners)
 * @method string getListeners()
 */
class DescribeHealthCheckStatusList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
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

}