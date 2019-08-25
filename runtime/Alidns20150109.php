<?php

namespace aliyun\sdk\services\Alidns20150109;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150109
 *
 * @package aliyun\sdk\services\Alidns20150109
 * @method UpdateDomainGroup UpdateDomainGroup()
 * @method AddDomain AddDomain()
 * @method DeleteSubDomainRecords DeleteSubDomainRecords()
 * @method AddDomainRecord AddDomainRecord()
 * @method DescribeGtmAccessStrategy DescribeGtmAccessStrategy()
 * @method DescribeSupportLines DescribeSupportLines()
 * @method OperateBatchDomain OperateBatchDomain()
 * @method DescribeGtmAvailableAlertGroup DescribeGtmAvailableAlertGroup()
 * @method AddGtmMonitor AddGtmMonitor()
 * @method UpdateDNSSLBWeight UpdateDNSSLBWeight()
 * @method UpdateGtmInstanceGlobalConfig UpdateGtmInstanceGlobalConfig()
 * @method DescribeDNSSLBSubDomains DescribeDNSSLBSubDomains()
 * @method DeleteGtmAccessStrategy DeleteGtmAccessStrategy()
 * @method DeleteDomainGroup DeleteDomainGroup()
 * @method DescribeDomainGroups DescribeDomainGroups()
 * @method DescribeGtmInstanceSystemCname DescribeGtmInstanceSystemCname()
 * @method ChangeDomainOfDnsProduct ChangeDomainOfDnsProduct()
 * @method UpdateGtmAccessStrategy UpdateGtmAccessStrategy()
 * @method SetDomainRecordStatus SetDomainRecordStatus()
 * @method SetGtmMonitorStatus SetGtmMonitorStatus()
 * @method DescribeDomains DescribeDomains()
 * @method DescribeDomainRecords DescribeDomainRecords()
 * @method DescribeGtmLogs DescribeGtmLogs()
 * @method DescribeBatchResultDetail DescribeBatchResultDetail()
 * @method CreateInstance CreateInstance()
 * @method UpdateGtmMonitor UpdateGtmMonitor()
 * @method ChangeDomainGroup ChangeDomainGroup()
 * @method UpdateDomainRecord UpdateDomainRecord()
 * @method DescribeDomainRecordInfo DescribeDomainRecordInfo()
 * @method ModifyHichinaDomainDNS ModifyHichinaDomainDNS()
 * @method GetMainDomainName GetMainDomainName()
 * @method DescribeDomainInfo DescribeDomainInfo()
 * @method DescribeRecordLogs DescribeRecordLogs()
 * @method SetGtmAccessMode SetGtmAccessMode()
 * @method DescribeGtmInstanceStatus DescribeGtmInstanceStatus()
 * @method AddGtmAccessStrategy AddGtmAccessStrategy()
 * @method DescribeGtmInstance DescribeGtmInstance()
 * @method DescribeDomainNs DescribeDomainNs()
 * @method QueryCreateInstancePrice QueryCreateInstancePrice()
 * @method DescribeGtmInstanceAddressPools DescribeGtmInstanceAddressPools()
 * @method DescribeGtmAccessStrategyAvailableConfig DescribeGtmAccessStrategyAvailableConfig()
 * @method DeleteDomain DeleteDomain()
 * @method DescribeDnsProductInstance DescribeDnsProductInstance()
 * @method DescribeSubDomainRecords DescribeSubDomainRecords()
 * @method DeleteGtmAddressPool DeleteGtmAddressPool()
 * @method DescribeGtmInstances DescribeGtmInstances()
 * @method DescribeGtmMonitorAvailableConfig DescribeGtmMonitorAvailableConfig()
 * @method AddGtmAddressPool AddGtmAddressPool()
 * @method DescribeDnsProductInstances DescribeDnsProductInstances()
 * @method DescribeGtmInstanceAddressPool DescribeGtmInstanceAddressPool()
 * @method DescribeGtmAccessStrategies DescribeGtmAccessStrategies()
 * @method DescribeDomainLogs DescribeDomainLogs()
 * @method UpdateGtmAddressPool UpdateGtmAddressPool()
 * @method DescribeGtmMonitorConfig DescribeGtmMonitorConfig()
 * @method DeleteDomainRecord DeleteDomainRecord()
 * @method AddDomainGroup AddDomainGroup()
 * @method DescribeBatchResultCount DescribeBatchResultCount()
 * @method SetDNSSLBStatus SetDNSSLBStatus()
 * @method CheckDomainRecord CheckDomainRecord()
 */
class V20150109
{
}

/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class UpdateDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class AddDomain extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 */
class DeleteSubDomainRecords extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setTTL($tTL)
 * @method int getTTL()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setLine($line)
 * @method string getLine()
 */
class AddDomainRecord extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 */
class DescribeGtmAccessStrategy extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeSupportLines extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDomainRecordInfo($domainRecordInfo)
 * @method array getDomainRecordInfo()
 */
class OperateBatchDomain extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class DescribeGtmAvailableAlertGroup extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddrPoolId($addrPoolId)
 * @method string getAddrPoolId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setMonitorExtendInfo($monitorExtendInfo)
 * @method string getMonitorExtendInfo()
 * @method $this setIspCityNode($ispCityNode)
 * @method array getIspCityNode()
 */
class AddGtmMonitor extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 * @method $this setWeight($weight)
 * @method int getWeight()
 */
class UpdateDNSSLBWeight extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 * @method $this setUserDomainName($userDomainName)
 * @method string getUserDomainName()
 * @method $this setLbaStrategy($lbaStrategy)
 * @method string getLbaStrategy()
 * @method $this setAlertGroup($alertGroup)
 * @method string getAlertGroup()
 * @method $this setCnameMode($cnameMode)
 * @method string getCnameMode()
 * @method $this setCnameCustomDomainName($cnameCustomDomainName)
 * @method string getCnameCustomDomainName()
 */
class UpdateGtmInstanceGlobalConfig extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDNSSLBSubDomains extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 */
class DeleteGtmAccessStrategy extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDomainGroups extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeGtmInstanceSystemCname extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNewDomain($newDomain)
 * @method string getNewDomain()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class ChangeDomainOfDnsProduct extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 * @method $this setStrategyName($strategyName)
 * @method string getStrategyName()
 * @method $this setDefaultAddrPoolId($defaultAddrPoolId)
 * @method string getDefaultAddrPoolId()
 * @method $this setFailoverAddrPoolId($failoverAddrPoolId)
 * @method string getFailoverAddrPoolId()
 * @method $this setAccessLines($accessLines)
 * @method string getAccessLines()
 */
class UpdateGtmAccessStrategy extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetDomainRecordStatus extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMonitorConfigId($monitorConfigId)
 * @method string getMonitorConfigId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetGtmMonitorStatus extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSearchMode($searchMode)
 * @method string getSearchMode()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeDomains extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setRRKeyWord($rRKeyWord)
 * @method string getRRKeyWord()
 * @method $this setTypeKeyWord($typeKeyWord)
 * @method string getTypeKeyWord()
 * @method $this setValueKeyWord($valueKeyWord)
 * @method string getValueKeyWord()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSearchMode($searchMode)
 * @method string getSearchMode()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class DescribeDomainRecords extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class DescribeGtmLogs extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setBatchType($batchType)
 * @method string getBatchType()
 */
class DescribeBatchResultDetail extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setInstanceVersion($instanceVersion)
 * @method string getInstanceVersion()
 * @method $this setMonth($month)
 * @method int getMonth()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setToken($token)
 * @method string getToken()
 */
class CreateInstance extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMonitorConfigId($monitorConfigId)
 * @method string getMonitorConfigId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setMonitorExtendInfo($monitorExtendInfo)
 * @method string getMonitorExtendInfo()
 * @method $this setIspCityNode($ispCityNode)
 * @method array getIspCityNode()
 */
class UpdateGtmMonitor extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ChangeDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setTTL($tTL)
 * @method int getTTL()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setLine($line)
 * @method string getLine()
 */
class UpdateDomainRecord extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeDomainRecordInfo extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ModifyHichinaDomainDNS extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInputString($inputString)
 * @method string getInputString()
 */
class GetMainDomainName extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNeedDetailAttributes($needDetailAttributes)
 * @method bool getNeedDetailAttributes()
 */
class DescribeDomainInfo extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setendDate($endDate)
 * @method string getendDate()
 */
class DescribeRecordLogs extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 * @method $this setAccessMode($accessMode)
 * @method string getAccessMode()
 */
class SetGtmAccessMode extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeGtmInstanceStatus extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStrategyName($strategyName)
 * @method string getStrategyName()
 * @method $this setDefaultAddrPoolId($defaultAddrPoolId)
 * @method string getDefaultAddrPoolId()
 * @method $this setFailoverAddrPoolId($failoverAddrPoolId)
 * @method string getFailoverAddrPoolId()
 * @method $this setAccessLines($accessLines)
 * @method string getAccessLines()
 */
class AddGtmAccessStrategy extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeGtmInstance extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainNs extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceVersion($instanceVersion)
 * @method string getInstanceVersion()
 * @method $this setMonth($month)
 * @method int getMonth()
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class QueryCreateInstancePrice extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeGtmInstanceAddressPools extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeGtmAccessStrategyAvailableConfig extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteDomain extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDnsProductInstance extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLine($line)
 * @method string getLine()
 */
class DescribeSubDomainRecords extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddrPoolId($addrPoolId)
 * @method string getAddrPoolId()
 */
class DeleteGtmAddressPool extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeGtmInstances extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeGtmMonitorAvailableConfig extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setMinAvailableAddrNum($minAvailableAddrNum)
 * @method int getMinAvailableAddrNum()
 * @method $this setAddr($addr)
 * @method array getAddr()
 */
class AddGtmAddressPool extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 */
class DescribeDnsProductInstances extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddrPoolId($addrPoolId)
 * @method string getAddrPoolId()
 */
class DescribeGtmInstanceAddressPool extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeGtmAccessStrategies extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setendDate($endDate)
 * @method string getendDate()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeDomainLogs extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddrPoolId($addrPoolId)
 * @method string getAddrPoolId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setMinAvailableAddrNum($minAvailableAddrNum)
 * @method int getMinAvailableAddrNum()
 * @method $this setAddr($addr)
 * @method array getAddr()
 */
class UpdateGtmAddressPool extends Request
{
}/**
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMonitorConfigId($monitorConfigId)
 * @method string getMonitorConfigId()
 */
class DescribeGtmMonitorConfig extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DeleteDomainRecord extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class AddDomainGroup extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setBatchType($batchType)
 * @method string getBatchType()
 */
class DescribeBatchResultCount extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 * @method $this setOpen($open)
 * @method bool getOpen()
 */
class SetDNSSLBStatus extends Request
{
}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setValue($value)
 * @method string getValue()
 */
class CheckDomainRecord extends Request
{
}
