<?php

namespace aliyun\sdk\services\WafOpenapi20180117;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180117
 *
 * @package aliyun\sdk\services\WafOpenapi20180117
 * @method DescribeScreenAccessAreaPv DescribeScreenAccessAreaPv()
 * @method SetWarnConfig SetWarnConfig()
 * @method DescribeDomainTransferConfig DescribeDomainTransferConfig()
 * @method DescribeNews DescribeNews()
 * @method DescribeScreenAttackTopAcl DescribeScreenAttackTopAcl()
 * @method DescribeLogHistograms DescribeLogHistograms()
 * @method DescribeScreenBandwidthGraph DescribeScreenBandwidthGraph()
 * @method DescribeDomainWebAttackTypePv DescribeDomainWebAttackTypePv()
 * @method DescribeQps DescribeQps()
 * @method DescribeIpRiskLabel DescribeIpRiskLabel()
 * @method ModifyRuleGroup ModifyRuleGroup()
 * @method ModifyProtectionRuleCacheStatus ModifyProtectionRuleCacheStatus()
 * @method DeleteIpDrainage DeleteIpDrainage()
 * @method ModifyAclRulesOrder ModifyAclRulesOrder()
 * @method DescribeRule DescribeRule()
 * @method CreateAutoAccess CreateAutoAccess()
 * @method DescribeDrainageIps DescribeDrainageIps()
 * @method DescribeScreenMobileOsPv DescribeScreenMobileOsPv()
 * @method DescribeWarnConfig DescribeWarnConfig()
 * @method DescribeRuleGroupRule DescribeRuleGroupRule()
 * @method DescribeTransferConfigInWork DescribeTransferConfigInWork()
 * @method DescribeAttackLog DescribeAttackLog()
 * @method ModifyDomainLogEnabled ModifyDomainLogEnabled()
 * @method SetDomainRuleGroup SetDomainRuleGroup()
 * @method DeleteRuleGroup DeleteRuleGroup()
 * @method DescribeDomainNames DescribeDomainNames()
 * @method DescribeScreenAbnormalMonitor DescribeScreenAbnormalMonitor()
 * @method ModifyProtectionRuleStatus ModifyProtectionRuleStatus()
 * @method CreateOutputDomainConfig CreateOutputDomainConfig()
 * @method DescribeWebSourceIpPv DescribeWebSourceIpPv()
 * @method DescribeProtectionModuleStatus DescribeProtectionModuleStatus()
 * @method SetProtectionModulePolicy SetProtectionModulePolicy()
 * @method DeleteProtectionModuleRule DeleteProtectionModuleRule()
 * @method ModifyDomainPackageCount ModifyDomainPackageCount()
 * @method DescribeHttpsCertInUse DescribeHttpsCertInUse()
 * @method CreateCertAndKey CreateCertAndKey()
 * @method DescribeScreenAccessUrlTop DescribeScreenAccessUrlTop()
 * @method DescribeNeedUpgradeDomainLimit DescribeNeedUpgradeDomainLimit()
 * @method SetWarnMode SetWarnMode()
 * @method DescribeDomains DescribeDomains()
 * @method CreateEmptyLogstore CreateEmptyLogstore()
 * @method DescribeScreenAccessIpTop DescribeScreenAccessIpTop()
 * @method CreateIpDrainage CreateIpDrainage()
 * @method ModifyDomainConfig ModifyDomainConfig()
 * @method DescribeSlsAuthStatus DescribeSlsAuthStatus()
 * @method CreateDomainDrainage CreateDomainDrainage()
 * @method DescribeBriefRuleGroups DescribeBriefRuleGroups()
 * @method DescribeLogExportTasks DescribeLogExportTasks()
 * @method DescribeWafSourceIpSegment DescribeWafSourceIpSegment()
 * @method CreateLogExportTask CreateLogExportTask()
 * @method DescribeScreenPcBrowserPv DescribeScreenPcBrowserPv()
 * @method DescribeScreenAttackTopArea DescribeScreenAttackTopArea()
 * @method DescribeScreenPackage DescribeScreenPackage()
 * @method DescribeAclRules DescribeAclRules()
 * @method DescribeLogExportFiles DescribeLogExportFiles()
 * @method DescribeAccessAreaStatistics DescribeAccessAreaStatistics()
 * @method DescribePackage DescribePackage()
 * @method ModifyAppOpenStatus ModifyAppOpenStatus()
 * @method CreateDomainConfig CreateDomainConfig()
 * @method DescribeDomainRuleGroup DescribeDomainRuleGroup()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeRegionStatus DescribeRegionStatus()
 * @method DeleteDomainConfig DeleteDomainConfig()
 * @method DescribeDomainProtocolType DescribeDomainProtocolType()
 * @method DescribeWebAttackCount DescribeWebAttackCount()
 * @method DescribeAccessWafSourcePvStatistics DescribeAccessWafSourcePvStatistics()
 * @method ModifyUnblockingIp ModifyUnblockingIp()
 * @method DescribeWarnMode DescribeWarnMode()
 * @method ModifyUserMobile ModifyUserMobile()
 * @method DescribeScreenRegions DescribeScreenRegions()
 * @method DescribeScreenIpRiskLabel DescribeScreenIpRiskLabel()
 * @method DescribeLogQuato DescribeLogQuato()
 * @method DescribeDomainConfig DescribeDomainConfig()
 * @method CreateSlsResource CreateSlsResource()
 * @method DescribeRuleGroups DescribeRuleGroups()
 * @method DescribeSlsOpenStatus DescribeSlsOpenStatus()
 * @method DescribeScreenAttackTypeChart DescribeScreenAttackTypeChart()
 * @method DescribeScreenQpsAttackTypeStatistics DescribeScreenQpsAttackTypeStatistics()
 * @method CreateSlsOpenOrder CreateSlsOpenOrder()
 * @method DescribePreDomains DescribePreDomains()
 * @method CreateRuleGroup CreateRuleGroup()
 * @method DescribeScreenPayInfo DescribeScreenPayInfo()
 * @method DescribeProtectionModuleRules DescribeProtectionModuleRules()
 * @method CreatePostpaidInstance CreatePostpaidInstance()
 * @method DescribeDomainLogEnableds DescribeDomainLogEnableds()
 * @method DescribePayInfo DescribePayInfo()
 * @method CreateProtectionModuleRule CreateProtectionModuleRule()
 * @method DescribeRegionThreshold DescribeRegionThreshold()
 * @method DeleteOutputDomainConfig DeleteOutputDomainConfig()
 * @method DescribeAclAttackPv DescribeAclAttackPv()
 * @method DescribeQpsHourFlowChart DescribeQpsHourFlowChart()
 * @method DescribeSlsResourceStatus DescribeSlsResourceStatus()
 * @method DescribeProtectionModuleCodeConfig DescribeProtectionModuleCodeConfig()
 * @method DeleteLogExportTask DeleteLogExportTask()
 * @method ModifyUserUsedScreen ModifyUserUsedScreen()
 * @method DescribeWebAttackLog DescribeWebAttackLog()
 * @method DescribeRules DescribeRules()
 * @method CreateAclRule CreateAclRule()
 * @method DescribeAutoAccessStatus DescribeAutoAccessStatus()
 * @method DeleteAclRule DeleteAclRule()
 * @method DescribeScreenQpsAttackTypeChart DescribeScreenQpsAttackTypeChart()
 * @method CreateCopyRuleGroup CreateCopyRuleGroup()
 * @method DescribeWebAttackTypePv DescribeWebAttackTypePv()
 * @method DescribeAuthorization DescribeAuthorization()
 * @method ModifyAclRule ModifyAclRule()
 * @method DescribeScreenAttackTopIp DescribeScreenAttackTopIp()
 * @method DescribeDomainConfigStatus DescribeDomainConfigStatus()
 * @method DescribeAccessMode DescribeAccessMode()
 * @method DescribeAsyncTaskStatus DescribeAsyncTaskStatus()
 * @method DescribeSlsAuthStatusHttpVersion DescribeSlsAuthStatusHttpVersion()
 * @method DescribeServiceStatus DescribeServiceStatus()
 * @method ModifyProtectionModuleRule ModifyProtectionModuleRule()
 * @method ModifyLogServiceOpenStatus ModifyLogServiceOpenStatus()
 * @method DescribeWebRegionPv DescribeWebRegionPv()
 * @method CheckDomainCert CheckDomainCert()
 * @method DescribeQrCode DescribeQrCode()
 * @method ModifyLogStatus ModifyLogStatus()
 * @method DescribeScreenAttackTypes DescribeScreenAttackTypes()
 * @method CreateAuthorization CreateAuthorization()
 * @method ModifyIpDrainage ModifyIpDrainage()
 * @method ModifyAccessMode ModifyAccessMode()
 * @method ModifyWafSwitch ModifyWafSwitch()
 * @method DescribeProtectionModulePolicy DescribeProtectionModulePolicy()
 * @method SetProtectionModuleStatus SetProtectionModuleStatus()
 * @method DescribeOutputDomains DescribeOutputDomains()
 * @method ModifyWafInstanceSwitch ModifyWafInstanceSwitch()
 * @method DescribeWebAttackType DescribeWebAttackType()
 * @method DescribeUntractedIps DescribeUntractedIps()
 * @method ModifyCertAndKey ModifyCertAndKey()
 * @method DescribeAppsStatusList DescribeAppsStatusList()
 * @method AppOpenAck AppOpenAck()
 */
class V20180117
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAccessAreaPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setSetValue($setValue)
 * @method string getSetValue()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetWarnConfig extends Request
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
 */
class DescribeDomainTransferConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNewsLang($newsLang)
 * @method string getNewsLang()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeNews extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRange($range)
 * @method int getRange()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAttackTopAcl extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setQuery($query)
 * @method string getQuery()
 */
class DescribeLogHistograms extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStep($step)
 * @method int getStep()
 */
class DescribeScreenBandwidthGraph extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDomainWebAttackTypePv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setSrcIp($srcIp)
 * @method string getSrcIp()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeIpRiskLabel extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setWafVersion($wafVersion)
 * @method int getWafVersion()
 * @method $this setDelRuleNumbers($delRuleNumbers)
 * @method string getDelRuleNumbers()
 * @method $this setAddRuleNumbers($addRuleNumbers)
 * @method string getAddRuleNumbers()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyProtectionRuleCacheStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDrainageId($drainageId)
 * @method string getDrainageId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteIpDrainage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setOrderData($orderData)
 * @method string getOrderData()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyAclRulesOrder extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRuleNumber($ruleNumber)
 * @method int getRuleNumber()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setCname($cname)
 * @method string getCname()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 */
class CreateAutoAccess extends Request
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
 * @method $this setRegionLang($regionLang)
 * @method string getRegionLang()
 * @method $this setIpKey($ipKey)
 * @method string getIpKey()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeDrainageIps extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenMobileOsPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeWarnConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeRuleGroupRule extends Request
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setQuery($query)
 * @method string getQuery()
 */
class DescribeAttackLog extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnabled($enabled)
 * @method int getEnabled()
 */
class ModifyDomainLogEnabled extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setWafVersion($wafVersion)
 * @method int getWafVersion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetDomainRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDomainNames extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAbnormalMonitor extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRuleStatus($ruleStatus)
 * @method int getRuleStatus()
 * @method $this setLockVersion($lockVersion)
 * @method int getLockVersion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyProtectionRuleStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateOutputDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeWebSourceIpPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeProtectionModuleStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setMode($mode)
 * @method int getMode()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetProtectionModulePolicy extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteProtectionModuleRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeHttpsCertInUse extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setHttpsCertName($httpsCertName)
 * @method string getHttpsCertName()
 */
class CreateCertAndKey extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAccessUrlTop extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCycle($cycle)
 * @method int getCycle()
 * @method $this setCycleNumber($cycleNumber)
 * @method int getCycleNumber()
 * @method $this setEventTypes($eventTypes)
 * @method array getEventTypes()
 * @method $this setWarnMode($warnMode)
 * @method string getWarnMode()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetWarnMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateEmptyLogstore extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAccessIpTop extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUntractedId($untractedId)
 * @method string getUntractedId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateIpDrainage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 * @method $this setHttpPort($httpPort)
 * @method string getHttpPort()
 * @method $this setHttpsPort($httpsPort)
 * @method string getHttpsPort()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setIsAccessProduct($isAccessProduct)
 * @method int getIsAccessProduct()
 * @method $this setProtocols($protocols)
 * @method string getProtocols()
 * @method $this setLoadBalancing($loadBalancing)
 * @method int getLoadBalancing()
 * @method $this setHttpToUserIp($httpToUserIp)
 * @method int getHttpToUserIp()
 */
class ModifyDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setWafRegionId($wafRegionId)
 * @method string getWafRegionId()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 */
class DescribeSlsAuthStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomains($domains)
 * @method string getDomains()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateDomainDrainage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeBriefRuleGroups extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeLogExportTasks extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeWafSourceIpSegment extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setBeginTime($beginTime)
 * @method int getBeginTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setQuery($query)
 * @method string getQuery()
 * @method $this setFileType($fileType)
 * @method string getFileType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 */
class CreateLogExportTask extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenPcBrowserPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRange($range)
 * @method int getRange()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAttackTopArea extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenPackage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeAclRules extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DescribeLogExportFiles extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method string getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method string getEndTimeStamp()
 */
class DescribeAccessAreaStatistics extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribePackage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class ModifyAppOpenStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeDomainRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainProtocolType extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method string getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method string getEndTimeStamp()
 */
class DescribeWebAttackCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method string getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method string getEndTimeStamp()
 */
class DescribeAccessWafSourcePvStatistics extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyUnblockingIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeWarnMode extends Request
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
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyUserMobile extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeScreenRegions extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setSrcIp($srcIp)
 * @method string getSrcIp()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenIpRiskLabel extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeLogQuato extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateSlsResource extends Request
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
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeRuleGroups extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setWafRegionId($wafRegionId)
 * @method string getWafRegionId()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 */
class DescribeSlsOpenStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStep($step)
 * @method int getStep()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAttackTypeChart extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenQpsAttackTypeStatistics extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateSlsOpenOrder extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribePreDomains extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setRuleNumbers($ruleNumbers)
 * @method string getRuleNumbers()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceSource($instanceSource)
 * @method string getInstanceSource()
 */
class DescribeScreenPayInfo extends Request
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
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeProtectionModuleRules extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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
 * @method $this setIsAutoRenew($isAutoRenew)
 * @method bool getIsAutoRenew()
 * @method $this setAutoRenewDuration($autoRenewDuration)
 * @method int getAutoRenewDuration()
 */
class CreatePostpaidInstance extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomains($domains)
 * @method string getDomains()
 */
class DescribeDomainLogEnableds extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceSource($instanceSource)
 * @method string getInstanceSource()
 */
class DescribePayInfo extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setRule($rule)
 * @method string getRule()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateProtectionModuleRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeRegionThreshold extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteOutputDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method string getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeAclAttackPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTimeZone($timeZone)
 * @method string getTimeZone()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeQpsHourFlowChart extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeSlsResourceStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setCodeType($codeType)
 * @method int getCodeType()
 * @method $this setCodeValue($codeValue)
 * @method int getCodeValue()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeProtectionModuleCodeConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setTaskIdList($taskIdList)
 * @method string getTaskIdList()
 */
class DeleteLogExportTask extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScreenName($screenName)
 * @method string getScreenName()
 * @method $this setInstanceSource($instanceSource)
 * @method string getInstanceSource()
 */
class ModifyUserUsedScreen extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAttackType($attackType)
 * @method string getAttackType()
 * @method $this setAttackerIp($attackerIp)
 * @method string getAttackerIp()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWebAttackLog extends Request
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
 * @method $this setRulekey($rulekey)
 * @method string getRulekey()
 * @method $this setAttackType($attackType)
 * @method int getAttackType()
 * @method $this setAppType($appType)
 * @method int getAppType()
 * @method $this setImpact($impact)
 * @method int getImpact()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeRules extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRules($rules)
 * @method string getRules()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateAclRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSourceIps($sourceIps)
 * @method string getSourceIps()
 */
class DescribeAutoAccessStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteAclRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStep($step)
 * @method int getStep()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenQpsAttackTypeChart extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setWafLang($wafLang)
 * @method string getWafLang()
 * @method $this setPolicyId($policyId)
 * @method int getPolicyId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateCopyRuleGroup extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeWebAttackTypePv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeAuthorization extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRules($rules)
 * @method string getRules()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyAclRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRange($range)
 * @method int getRange()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAttackTopIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainConfigStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeAccessMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWafRequestId($wafRequestId)
 * @method string getWafRequestId()
 */
class DescribeAsyncTaskStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setWafRegionId($wafRegionId)
 * @method string getWafRegionId()
 * @method $this setServiceCode($serviceCode)
 * @method string getServiceCode()
 */
class DescribeSlsAuthStatusHttpVersion extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeServiceStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setRule($rule)
 * @method string getRule()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setLockVersion($lockVersion)
 * @method int getLockVersion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyProtectionModuleRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setActive($active)
 * @method int getActive()
 */
class ModifyLogServiceOpenStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeWebRegionPv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setKey($key)
 * @method string getKey()
 */
class CheckDomainCert extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeQrCode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setActive($active)
 * @method int getActive()
 */
class ModifyLogStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTimestamp($startTimestamp)
 * @method string getStartTimestamp()
 * @method $this setEndTimestamp($endTimestamp)
 * @method string getEndTimestamp()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setRange($range)
 * @method int getRange()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeScreenAttackTypes extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class CreateAuthorization extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDrainageId($drainageId)
 * @method string getDrainageId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ModifyIpDrainage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class ModifyAccessMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeProtectionModulePolicy extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setDefense($defense)
 * @method string getDefense()
 * @method $this setModuleStatus($moduleStatus)
 * @method int getModuleStatus()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class SetProtectionModuleStatus extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeOutputDomains extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ModifyWafInstanceSwitch extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeWebAttackType extends Request
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
 * @method $this setRegionLang($regionLang)
 * @method string getRegionLang()
 * @method $this setIpKey($ipKey)
 * @method string getIpKey()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeUntractedIps extends Request
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
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeAppsStatusList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
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