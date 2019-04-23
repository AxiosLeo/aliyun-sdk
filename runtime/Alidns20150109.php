<?php

namespace aliyun\sdk\services\Alidns20150109;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150109
 *
 * @package aliyun\sdk\services\Alidns20150109
 * @method UpdateDomainGroup UpdateDomainGroup()
 * @method BindInstanceDomains BindInstanceDomains()
 * @method AddDomain AddDomain()
 * @method DescribeSiteMonitorIspCityInfos DescribeSiteMonitorIspCityInfos()
 * @method DeleteSubDomainRecords DeleteSubDomainRecords()
 * @method ChangeRecordGroup ChangeRecordGroup()
 * @method AddDomainRecord AddDomainRecord()
 * @method MoveDomainResourceGroup MoveDomainResourceGroup()
 * @method DescribeImportDomainsResult DescribeImportDomainsResult()
 * @method AddBatchRr AddBatchRr()
 * @method DescribeGtmAccessStrategy DescribeGtmAccessStrategy()
 * @method DescribeSupportLines DescribeSupportLines()
 * @method DescribeDnsMonitor DescribeDnsMonitor()
 * @method OperateBatchDomain OperateBatchDomain()
 * @method UpdateCustomLine UpdateCustomLine()
 * @method DescribeGtmAvailableAlertGroup DescribeGtmAvailableAlertGroup()
 * @method AddGtmMonitor AddGtmMonitor()
 * @method DescribeSiteMonitorAlertLogs DescribeSiteMonitorAlertLogs()
 * @method NotifyDnsAttackClean NotifyDnsAttackClean()
 * @method UpdateDNSSLBWeight UpdateDNSSLBWeight()
 * @method AddSiteMonitor AddSiteMonitor()
 * @method QueryInstanceOrderList QueryInstanceOrderList()
 * @method RetrieveBatchDomain RetrieveBatchDomain()
 * @method UpdateGtmInstanceGlobalConfig UpdateGtmInstanceGlobalConfig()
 * @method DescribeDNSSLBSubDomains DescribeDNSSLBSubDomains()
 * @method QueryDnsMonitorLast QueryDnsMonitorLast()
 * @method DescribeBundleRecordTaskResult DescribeBundleRecordTaskResult()
 * @method DescribeSiteMonitors DescribeSiteMonitors()
 * @method DeleteCustomLines DeleteCustomLines()
 * @method QueryAllowRenewPeriodList QueryAllowRenewPeriodList()
 * @method DescribeSiteMonitorNodeTrends DescribeSiteMonitorNodeTrends()
 * @method DescribeRecordStatisticsSummary DescribeRecordStatisticsSummary()
 * @method DeleteDnsTemplateRecord DeleteDnsTemplateRecord()
 * @method RefundOrder RefundOrder()
 * @method DeleteGtmAccessStrategy DeleteGtmAccessStrategy()
 * @method DescribeInstanceExtendStatus DescribeInstanceExtendStatus()
 * @method DeleteDomainGroup DeleteDomainGroup()
 * @method DescribeDomainGroups DescribeDomainGroups()
 * @method DescribeCanAddMonitorDomainRrs DescribeCanAddMonitorDomainRrs()
 * @method DescribeDomainStatisticsSummary DescribeDomainStatisticsSummary()
 * @method NotifyDnsAttackBlackHold NotifyDnsAttackBlackHold()
 * @method ScanSubdomainRecords ScanSubdomainRecords()
 * @method DescribeDomainDnsProtectLogs DescribeDomainDnsProtectLogs()
 * @method DescribeGtmInstanceSystemCname DescribeGtmInstanceSystemCname()
 * @method DeleteSiteMonitors DeleteSiteMonitors()
 * @method ChangeDomainOfDnsProduct ChangeDomainOfDnsProduct()
 * @method UpdateGtmAccessStrategy UpdateGtmAccessStrategy()
 * @method DescribeCanAddMonitorSubDomainInfo DescribeCanAddMonitorSubDomainInfo()
 * @method QueryDnsMonitorFailureRate QueryDnsMonitorFailureRate()
 * @method SetDomainRecordStatus SetDomainRecordStatus()
 * @method DescribeDnsMonitorAvailableNodes DescribeDnsMonitorAvailableNodes()
 * @method UpdateDnsTemplateRecord UpdateDnsTemplateRecord()
 * @method SetGtmMonitorStatus SetGtmMonitorStatus()
 * @method QueryRenewPrice QueryRenewPrice()
 * @method DescribeBatchLogs DescribeBatchLogs()
 * @method UnbindInstanceDomains UnbindInstanceDomains()
 * @method ValidateDomainCanAdd ValidateDomainCanAdd()
 * @method DescribeSlaveDnsDomains DescribeSlaveDnsDomains()
 * @method DescribeDomains DescribeDomains()
 * @method DescribeCustomLines DescribeCustomLines()
 * @method DescribeImportDomainRecordsResult DescribeImportDomainRecordsResult()
 * @method DescribeDomainRecords DescribeDomainRecords()
 * @method ChangeBatchDomainGroup ChangeBatchDomainGroup()
 * @method OpenGslb OpenGslb()
 * @method SubmitImportDomainRecordsFile SubmitImportDomainRecordsFile()
 * @method DescribeSiteMonitorIspPointTrends DescribeSiteMonitorIspPointTrends()
 * @method ResetImportDomainsResult ResetImportDomainsResult()
 * @method SubmitBundleRecordTask SubmitBundleRecordTask()
 * @method DescribeInstanceDomains DescribeInstanceDomains()
 * @method AddRecordGroup AddRecordGroup()
 * @method DescribeGtmLogs DescribeGtmLogs()
 * @method DescribeRecordStatisticsHistory DescribeRecordStatisticsHistory()
 * @method DescribeCustomLine DescribeCustomLine()
 * @method DescribeBatchResultDetail DescribeBatchResultDetail()
 * @method DeleteDnsTemplate DeleteDnsTemplate()
 * @method CreateInstance CreateInstance()
 * @method DescribeSlaveDnsConfig DescribeSlaveDnsConfig()
 * @method DeleteBatchDomain DeleteBatchDomain()
 * @method DescribeDnsTemplates DescribeDnsTemplates()
 * @method UpdateDnsMonitor UpdateDnsMonitor()
 * @method UpdateGtmMonitor UpdateGtmMonitor()
 * @method QueryDnsMonitorStatistics QueryDnsMonitorStatistics()
 * @method ValidateDomainCanBind ValidateDomainCanBind()
 * @method ChangeDomainGroup ChangeDomainGroup()
 * @method MoveGtmResourceGroup MoveGtmResourceGroup()
 * @method UpdateRecordGroup UpdateRecordGroup()
 * @method UpdateDomainRecord UpdateDomainRecord()
 * @method DescribeDomainRecordInfo DescribeDomainRecordInfo()
 * @method DescribeSiteMonitor DescribeSiteMonitor()
 * @method DescribeSlaveDnsStatus DescribeSlaveDnsStatus()
 * @method DescribeBundleTempDomains DescribeBundleTempDomains()
 * @method CloseGslb CloseGslb()
 * @method DescribeDnsMonitorTaskConfig DescribeDnsMonitorTaskConfig()
 * @method SetSlaveDnsConfigStatus SetSlaveDnsConfigStatus()
 * @method DescribeGslbInstance DescribeGslbInstance()
 * @method ModifyHichinaDomainDNS ModifyHichinaDomainDNS()
 * @method AddBatchDomainFromFile AddBatchDomainFromFile()
 * @method SetSiteMonitorsStatus SetSiteMonitorsStatus()
 * @method ResetBatchResult ResetBatchResult()
 * @method AddSlaveDnsConfig AddSlaveDnsConfig()
 * @method GetMainDomainName GetMainDomainName()
 * @method SubmitImportDomainsFile SubmitImportDomainsFile()
 * @method DescribeDomainInfo DescribeDomainInfo()
 * @method DescribeRecordLogs DescribeRecordLogs()
 * @method DescribeSiteMonitorIspTrends DescribeSiteMonitorIspTrends()
 * @method SetGtmAccessMode SetGtmAccessMode()
 * @method UpdateSlaveDnsConfig UpdateSlaveDnsConfig()
 * @method DescribeGtmInstanceStatus DescribeGtmInstanceStatus()
 * @method AddDnsTemplate AddDnsTemplate()
 * @method DescribeGslbInstances DescribeGslbInstances()
 * @method AddBatchDomain AddBatchDomain()
 * @method DescribeDomainDnsStatistics DescribeDomainDnsStatistics()
 * @method QueryDnsMonitorHistory QueryDnsMonitorHistory()
 * @method DescribeDnsTemplateInfo DescribeDnsTemplateInfo()
 * @method AddGtmAccessStrategy AddGtmAccessStrategy()
 * @method DeleteRecordGroup DeleteRecordGroup()
 * @method DescribeGtmInstance DescribeGtmInstance()
 * @method DescribeSiteMonitorProvinceTrends DescribeSiteMonitorProvinceTrends()
 * @method AddCustomLine AddCustomLine()
 * @method UpdateDomainRemark UpdateDomainRemark()
 * @method DescribeDomainNs DescribeDomainNs()
 * @method AddDnsTemplateRecord AddDnsTemplateRecord()
 * @method DescribeDomainWhoisInfo DescribeDomainWhoisInfo()
 * @method DeleteBatchRr DeleteBatchRr()
 * @method SwitchLineType SwitchLineType()
 * @method SyncWithMasterDns SyncWithMasterDns()
 * @method QueryCreateInstancePrice QueryCreateInstancePrice()
 * @method DescribeGtmInstanceAddressPools DescribeGtmInstanceAddressPools()
 * @method DescribeDomainSoa DescribeDomainSoa()
 * @method DescribeGtmAccessStrategyAvailableConfig DescribeGtmAccessStrategyAvailableConfig()
 * @method QueryInstanceUnpaidOrder QueryInstanceUnpaidOrder()
 * @method DeleteDomain DeleteDomain()
 * @method DescribeDnsProductInstance DescribeDnsProductInstance()
 * @method QueryDnsMonitorErrorEvent QueryDnsMonitorErrorEvent()
 * @method UpdateDomainRecordRemark UpdateDomainRecordRemark()
 * @method VerifyTxtRecordForRetrievalDomainName VerifyTxtRecordForRetrievalDomainName()
 * @method DescribeRecordGroups DescribeRecordGroups()
 * @method TransferBatchDomain TransferBatchDomain()
 * @method DescribeSubDomainRecords DescribeSubDomainRecords()
 * @method DescribeSiteMonitorIspInfos DescribeSiteMonitorIspInfos()
 * @method DeleteGtmAddressPool DeleteGtmAddressPool()
 * @method DescribeDnsProductAttributes DescribeDnsProductAttributes()
 * @method UpdateSiteMonitor UpdateSiteMonitor()
 * @method AddDnsMonitor AddDnsMonitor()
 * @method DescribeGtmInstances DescribeGtmInstances()
 * @method DeleteDnsMonitor DeleteDnsMonitor()
 * @method DescribeDomainDnsAttackStatistics DescribeDomainDnsAttackStatistics()
 * @method DescribeGtmMonitorAvailableConfig DescribeGtmMonitorAvailableConfig()
 * @method AddGtmAddressPool AddGtmAddressPool()
 * @method DescribeDnsProductInstances DescribeDnsProductInstances()
 * @method QueryDnsMonitorNodeResponseTime QueryDnsMonitorNodeResponseTime()
 * @method CancelOrder CancelOrder()
 * @method GetTxtRecordForRetrievalDomainName GetTxtRecordForRetrievalDomainName()
 * @method DescribeGtmInstanceAddressPool DescribeGtmInstanceAddressPool()
 * @method DescribeDnsMonitors DescribeDnsMonitors()
 * @method AddBatchTempDomains AddBatchTempDomains()
 * @method DescribeGtmAccessStrategies DescribeGtmAccessStrategies()
 * @method DescribeDomainLogs DescribeDomainLogs()
 * @method UpdateGtmAddressPool UpdateGtmAddressPool()
 * @method DescribeGtmMonitorConfig DescribeGtmMonitorConfig()
 * @method OrderPaidNotice OrderPaidNotice()
 * @method DeleteDomainRecord DeleteDomainRecord()
 * @method AddDomainGroup AddDomainGroup()
 * @method CreateRenewOrder CreateRenewOrder()
 * @method DescribeBatchResultCount DescribeBatchResultCount()
 * @method MarkGslbStatusOk MarkGslbStatusOk()
 * @method SetDNSSLBStatus SetDNSSLBStatus()
 * @method UpdateBatchRr UpdateBatchRr()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BindInstanceDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class AddDomain extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setIsp($isp)
 * @method string getIsp()
 */
class DescribeSiteMonitorIspCityInfos extends Request
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
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setRecordIdList($recordIdList)
 * @method string getRecordIdList()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ChangeRecordGroup extends Request
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
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setNewResourceGroupId($newResourceGroupId)
 * @method string getNewResourceGroupId()
 */
class MoveDomainResourceGroup extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class DescribeImportDomainsResult extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setRr($rr)
 * @method string getRr()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setTtl($ttl)
 * @method int getTtl()
 */
class AddBatchRr extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setNeedAlarmInfo($needAlarmInfo)
 * @method bool getNeedAlarmInfo()
 */
class DescribeDnsMonitor extends Request
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
 * @method $this setLineName($lineName)
 * @method string getLineName()
 * @method $this setIpSegment($ipSegment)
 * @method array getIpSegment()
 * @method $this setLineId($lineId)
 * @method int getLineId()
 */
class UpdateCustomLine extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeGtmAvailableAlertGroup extends Request
{

}/**
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 */
class DescribeSiteMonitorAlertLogs extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setQps($qps)
 * @method int getQps()
 * @method $this setEventTimestamp($eventTimestamp)
 * @method int getEventTimestamp()
 */
class NotifyDnsAttackClean extends Request
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
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class AddSiteMonitor extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOrderStatus($orderStatus)
 * @method string getOrderStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryInstanceOrderList extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDelayTime($delayTime)
 * @method int getDelayTime()
 */
class RetrieveBatchDomain extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setAlarmType($alarmType)
 * @method string getAlarmType()
 */
class QueryDnsMonitorLast extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DescribeBundleRecordTaskResult extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 */
class DescribeSiteMonitors extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLineIds($lineIds)
 * @method string getLineIds()
 */
class DeleteCustomLines extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class QueryAllowRenewPeriodList extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class DescribeSiteMonitorNodeTrends extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSearchMode($searchMode)
 * @method string getSearchMode()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 */
class DescribeRecordStatisticsSummary extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDnsTemplateRecordId($dnsTemplateRecordId)
 * @method int getDnsTemplateRecordId()
 */
class DeleteDnsTemplateRecord extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRefundType($refundType)
 * @method string getRefundType()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 */
class RefundOrder extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeInstanceExtendStatus extends Request
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCanAddMonitorDomainRrs extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setDirection($direction)
 * @method string getDirection()
 * @method $this setSearchMode($searchMode)
 * @method string getSearchMode()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 */
class DescribeDomainStatisticsSummary extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setQps($qps)
 * @method int getQps()
 * @method $this setEventTimestamp($eventTimestamp)
 * @method int getEventTimestamp()
 */
class NotifyDnsAttackBlackHold extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 */
class ScanSubdomainRecords extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainDnsProtectLogs extends Request
{

}/**
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
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 */
class DeleteSiteMonitors extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRR($rR)
 * @method string getRR()
 */
class DescribeCanAddMonitorSubDomainInfo extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setLastMinute($lastMinute)
 * @method int getLastMinute()
 */
class QueryDnsMonitorFailureRate extends Request
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
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeDnsMonitorAvailableNodes extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDnsTemplateRecordId($dnsTemplateRecordId)
 * @method int getDnsTemplateRecordId()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class UpdateDnsTemplateRecord extends Request
{

}/**
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setMonth($month)
 * @method int getMonth()
 */
class QueryRenewPrice extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class DescribeBatchLogs extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class UnbindInstanceDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ValidateDomainCanAdd extends Request
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
 */
class DescribeSlaveDnsDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCustomLines extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setOnlyFailed($onlyFailed)
 * @method bool getOnlyFailed()
 */
class DescribeImportDomainRecordsResult extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ChangeBatchDomainGroup extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 */
class OpenGslb extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class SubmitImportDomainRecordsFile extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class DescribeSiteMonitorIspPointTrends extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class ResetImportDomainsResult extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRecords($records)
 * @method string getRecords()
 */
class SubmitBundleRecordTask extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeInstanceDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class AddRecordGroup extends Request
{

}/**
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
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRr($rr)
 * @method string getRr()
 */
class DescribeRecordStatisticsHistory extends Request
{

}/**
 * @method $this setLineId($lineId)
 * @method int getLineId()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeCustomLine extends Request
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
 * @method $this setDnsTemplateId($dnsTemplateId)
 * @method int getDnsTemplateId()
 */
class DeleteDnsTemplate extends Request
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeSlaveDnsConfig extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class DeleteBatchDomain extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class DescribeDnsTemplates extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setNotifyType($notifyType)
 * @method string getNotifyType()
 * @method $this setNode($node)
 * @method array getNode()
 * @method $this setDnsValues($dnsValues)
 * @method string getDnsValues()
 * @method $this setAlarm($alarm)
 * @method array getAlarm()
 */
class UpdateDnsMonitor extends Request
{

}/**
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class QueryDnsMonitorStatistics extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ValidateDomainCanBind extends Request
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
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setNewResourceGroupId($newResourceGroupId)
 * @method string getNewResourceGroupId()
 */
class MoveGtmResourceGroup extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class UpdateRecordGroup extends Request
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DescribeSiteMonitor extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeSlaveDnsStatus extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class DescribeBundleTempDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 */
class CloseGslb extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeDnsMonitorTaskConfig extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SetSlaveDnsConfigStatus extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($subDomain)
 * @method string getSubDomain()
 */
class DescribeGslbInstance extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class AddBatchDomainFromFile extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 * @method $this setPaused($paused)
 * @method bool getPaused()
 */
class SetSiteMonitorsStatus extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class ResetBatchResult extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNeedNotice($needNotice)
 * @method bool getNeedNotice()
 * @method $this setTsigConfig($tsigConfig)
 * @method array getTsigConfig()
 * @method $this setIpSegment($ipSegment)
 * @method array getIpSegment()
 */
class AddSlaveDnsConfig extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class SubmitImportDomainsFile extends Request
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class DescribeSiteMonitorIspTrends extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNeedNotice($needNotice)
 * @method bool getNeedNotice()
 * @method $this setTsigConfig($tsigConfig)
 * @method array getTsigConfig()
 * @method $this setIpSegment($ipSegment)
 * @method array getIpSegment()
 */
class UpdateSlaveDnsConfig extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 */
class AddDnsTemplate extends Request
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
class DescribeGslbInstances extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class AddBatchDomain extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 */
class DescribeDomainDnsStatistics extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setAlarmType($alarmType)
 * @method string getAlarmType()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class QueryDnsMonitorHistory extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDnsTemplateId($dnsTemplateId)
 * @method int getDnsTemplateId()
 */
class DescribeDnsTemplateInfo extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DeleteRecordGroup extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 */
class DescribeSiteMonitorProvinceTrends extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLineName($lineName)
 * @method string getLineName()
 * @method $this setIpSegment($ipSegment)
 * @method array getIpSegment()
 */
class AddCustomLine extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class UpdateDomainRemark extends Request
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
 * @method $this setDnsTemplateId($dnsTemplateId)
 * @method int getDnsTemplateId()
 * @method $this setRR($rR)
 * @method string getRR()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class AddDnsTemplateRecord extends Request
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
class DescribeDomainWhoisInfo extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setRr($rr)
 * @method string getRr()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setQueryParamType($queryParamType)
 * @method int getQueryParamType()
 */
class DeleteBatchRr extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLineType($lineType)
 * @method string getLineType()
 */
class SwitchLineType extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SyncWithMasterDns extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainSoa extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class QueryInstanceUnpaidOrder extends Request
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStartTimestamp($startTimestamp)
 * @method int getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method int getEndTimestamp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 */
class QueryDnsMonitorErrorEvent extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class UpdateDomainRecordRemark extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class VerifyTxtRecordForRetrievalDomainName extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeRecordGroups extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setVerifyCode($verifyCode)
 * @method string getVerifyCode()
 * @method $this setTransferToAccount($transferToAccount)
 * @method string getTransferToAccount()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class TransferBatchDomain extends Request
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 */
class DescribeSiteMonitorIspInfos extends Request
{

}/**
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
 * @method $this setVersionCode($versionCode)
 * @method string getVersionCode()
 */
class DescribeDnsProductAttributes extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setAlertNotifyChannels($alertNotifyChannels)
 * @method string getAlertNotifyChannels()
 * @method $this setAlertSwitchPolicy($alertSwitchPolicy)
 * @method string getAlertSwitchPolicy()
 * @method $this setTaskInterval($taskInterval)
 * @method int getTaskInterval()
 * @method $this setTaskNodes($taskNodes)
 * @method string getTaskNodes()
 * @method $this setTaskPort($taskPort)
 * @method int getTaskPort()
 * @method $this setTaskPath($taskPath)
 * @method string getTaskPath()
 * @method $this setTaskProtocol($taskProtocol)
 * @method string getTaskProtocol()
 * @method $this setAlertTimes($alertTimes)
 * @method int getAlertTimes()
 * @method $this setStandbyValue($standbyValue)
 * @method array getStandbyValue()
 */
class UpdateSiteMonitor extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setAddress($address)
 * @method string getAddress()
 */
class AddDnsMonitor extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteDnsMonitor extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDate($date)
 * @method string getDate()
 */
class DescribeDomainDnsAttackStatistics extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeGtmMonitorAvailableConfig extends Request
{

}/**
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
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class QueryDnsMonitorNodeResponseTime extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 */
class CancelOrder extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetTxtRecordForRetrievalDomainName extends Request
{

}/**
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setSearchMode($searchMode)
 * @method string getSearchMode()
 */
class DescribeDnsMonitors extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUserClientIp($userClientIp)
 * @method string getUserClientIp()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class AddBatchTempDomains extends Request
{

}/**
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setdata($data)
 * @method string getdata()
 */
class OrderPaidNotice extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setMonth($month)
 * @method int getMonth()
 */
class CreateRenewOrder extends Request
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
 * @method $this setStatusId($statusId)
 * @method int getStatusId()
 */
class MarkGslbStatusOk extends Request
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setRr($rr)
 * @method string getRr()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setNewRr($newRr)
 * @method string getNewRr()
 * @method $this setNewValue($newValue)
 * @method string getNewValue()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setQueryParamType($queryParamType)
 * @method int getQueryParamType()
 */
class UpdateBatchRr extends Request
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