<?php

namespace aliyun\sdk\services\Cdn20180510;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180510
 *
 * @package aliyun\sdk\services\Cdn20180510
 * @method DescribeDomainRealTimeHttpCodeData DescribeDomainRealTimeHttpCodeData()
 * @method DescribeDomainTopUrlVisit DescribeDomainTopUrlVisit()
 * @method DescribeDomainSrcTrafficData DescribeDomainSrcTrafficData()
 * @method DescribeDomainsBySource DescribeDomainsBySource()
 * @method DescribeDomainTrafficData DescribeDomainTrafficData()
 * @method ModifyHttpHeaderConfig ModifyHttpHeaderConfig()
 * @method SetFileTypeForceTtlCodeConfig SetFileTypeForceTtlCodeConfig()
 * @method DescribeHistoryCharge95Info DescribeHistoryCharge95Info()
 * @method DescribeUserConfigs DescribeUserConfigs()
 * @method ListDomainsByLogConfigId ListDomainsByLogConfigId()
 * @method SetForwardSchemeConfig SetForwardSchemeConfig()
 * @method DescribeRealtimeLogAuthorized DescribeRealtimeLogAuthorized()
 * @method DeleteCacheExpiredConfig DeleteCacheExpiredConfig()
 * @method UntagResources UntagResources()
 * @method DescribeDomainISPData DescribeDomainISPData()
 * @method AddFCTrigger AddFCTrigger()
 * @method SetReqAuthConfig SetReqAuthConfig()
 * @method SetPathCacheExpiredConfig SetPathCacheExpiredConfig()
 * @method DescribeUserUsageDetailDataExportTask DescribeUserUsageDetailDataExportTask()
 * @method BatchSetCdnDomainServerCertificate BatchSetCdnDomainServerCertificate()
 * @method SetForceRedirectConfig SetForceRedirectConfig()
 * @method ModifyRealtimeLogDelivery ModifyRealtimeLogDelivery()
 * @method SetRefererConfig SetRefererConfig()
 * @method SetAliAuthConfig SetAliAuthConfig()
 * @method DescribeUserCdnStatus DescribeUserCdnStatus()
 * @method DescribeDomainBpsDataByTimeStamp DescribeDomainBpsDataByTimeStamp()
 * @method SetWaitingRoomConfig SetWaitingRoomConfig()
 * @method SetReqHeaderConfig SetReqHeaderConfig()
 * @method DeleteFCTrigger DeleteFCTrigger()
 * @method DeleteRealtimeLogDelivery DeleteRealtimeLogDelivery()
 * @method DescribeDomainCustomLogConfig DescribeDomainCustomLogConfig()
 * @method ModifyCdnDomainSchdmByProperty ModifyCdnDomainSchdmByProperty()
 * @method SetErrorPageConfig SetErrorPageConfig()
 * @method DescribeRangeDataByLocateAndIspService DescribeRangeDataByLocateAndIspService()
 * @method DescribeMacAppInfo DescribeMacAppInfo()
 * @method PurgeObjectCaches PurgeObjectCaches()
 * @method BlockObjectCaches BlockObjectCaches()
 * @method DescribeDomainCname DescribeDomainCname()
 * @method DescribeCdnUserBillHistory DescribeCdnUserBillHistory()
 * @method DescribeCdnTypes DescribeCdnTypes()
 * @method SetPageCompressConfig SetPageCompressConfig()
 * @method RefreshObjectCaches RefreshObjectCaches()
 * @method DescribeDiamondData DescribeDiamondData()
 * @method DescribeExtensiveDomainData DescribeExtensiveDomainData()
 * @method AddCdnDomain AddCdnDomain()
 * @method DescribeDomainMax95BpsData DescribeDomainMax95BpsData()
 * @method SetIpAllowListConfig SetIpAllowListConfig()
 * @method DescribeUserDomains DescribeUserDomains()
 * @method DescribeDomainRegionData DescribeDomainRegionData()
 * @method DeleteHttpHeaderConfig DeleteHttpHeaderConfig()
 * @method DescribeCdnDomainDetail DescribeCdnDomainDetail()
 * @method DescribeDomainPathData DescribeDomainPathData()
 * @method DescribeDomainRealTimeBpsData DescribeDomainRealTimeBpsData()
 * @method DescribeDomainRealTimeSrcBpsData DescribeDomainRealTimeSrcBpsData()
 * @method DescribeRefreshTasks DescribeRefreshTasks()
 * @method DescribeCdnDomainConfigs DescribeCdnDomainConfigs()
 * @method ModifyCdnDomain ModifyCdnDomain()
 * @method DescribeCdnService DescribeCdnService()
 * @method DescribeDomainRealTimeMetric DescribeDomainRealTimeMetric()
 * @method SetIgnoreQueryStringConfig SetIgnoreQueryStringConfig()
 * @method DescribeDomainRealTimeSrcTrafficData DescribeDomainRealTimeSrcTrafficData()
 * @method SetDomainGreenManagerConfig SetDomainGreenManagerConfig()
 * @method SetHttpErrorPageConfig SetHttpErrorPageConfig()
 * @method ListRealtimeLogDelivery ListRealtimeLogDelivery()
 * @method CreateUsageDetailDataExportTask CreateUsageDetailDataExportTask()
 * @method ModifyCdnService ModifyCdnService()
 * @method BatchStopCdnDomain BatchStopCdnDomain()
 * @method DescribeDomainUvData DescribeDomainUvData()
 * @method StopCdnDomain StopCdnDomain()
 * @method ListRealtimeLogDeliveryInfos ListRealtimeLogDeliveryInfos()
 * @method DescribeDomainRealTimeQpsData DescribeDomainRealTimeQpsData()
 * @method CreateRealTimeLogDelivery CreateRealTimeLogDelivery()
 * @method PushObjectCache PushObjectCache()
 * @method ModifyPathCacheExpiredConfig ModifyPathCacheExpiredConfig()
 * @method DescribeDomainSlowRatio DescribeDomainSlowRatio()
 * @method SetVideoSeekConfig SetVideoSeekConfig()
 * @method DeleteCdnDomain DeleteCdnDomain()
 * @method SetPathForceTtlCodeConfig SetPathForceTtlCodeConfig()
 * @method DescribeCdnCertificateList DescribeCdnCertificateList()
 * @method DescribeL2VipsByDomain DescribeL2VipsByDomain()
 * @method SetCcConfig SetCcConfig()
 * @method EnableRealtimeLogDelivery EnableRealtimeLogDelivery()
 * @method ListRealtimeLogDeliveryDomains ListRealtimeLogDeliveryDomains()
 * @method DescribeCdnUserBillPrediction DescribeCdnUserBillPrediction()
 * @method DescribeDomainSrcBpsData DescribeDomainSrcBpsData()
 * @method SetOptimizeConfig SetOptimizeConfig()
 * @method DescribeDomainTopReferVisit DescribeDomainTopReferVisit()
 * @method DescribeDomainRealTimeSrcHttpCodeData DescribeDomainRealTimeSrcHttpCodeData()
 * @method OpenCdnService OpenCdnService()
 * @method DescribeDomainPnoData DescribeDomainPnoData()
 * @method SetHttpsOptionConfig SetHttpsOptionConfig()
 * @method DisableRealtimeLogDelivery DisableRealtimeLogDelivery()
 * @method ListFCTrigger ListFCTrigger()
 * @method SetRemoveQueryStringConfig SetRemoveQueryStringConfig()
 * @method DescribeCdnRegionAndIsp DescribeCdnRegionAndIsp()
 * @method DescribeCdnHttpsDomainList DescribeCdnHttpsDomainList()
 * @method ModifyUserCustomLogConfig ModifyUserCustomLogConfig()
 * @method SetSourceHostConfig SetSourceHostConfig()
 * @method DescribeDomainReqHitRateData DescribeDomainReqHitRateData()
 * @method DeleteSpecificConfig DeleteSpecificConfig()
 * @method DescribeTagResources DescribeTagResources()
 * @method SetWafConfig SetWafConfig()
 * @method SetSkipModuleConfig SetSkipModuleConfig()
 * @method DescribeFCTrigger DescribeFCTrigger()
 * @method DescribeCdnDomainLogs DescribeCdnDomainLogs()
 * @method DescribeTopDomainsByFlow DescribeTopDomainsByFlow()
 * @method SetDomainServerCertificate SetDomainServerCertificate()
 * @method UpdateFCTrigger UpdateFCTrigger()
 * @method SetRemoteReqAuthConfig SetRemoteReqAuthConfig()
 * @method DescribeDomainLogConfig DescribeDomainLogConfig()
 * @method DescribeDomainsUsageByDay DescribeDomainsUsageByDay()
 * @method DescribeUserTags DescribeUserTags()
 * @method DescribeDomainSrcHttpCodeData DescribeDomainSrcHttpCodeData()
 * @method DescribeCdnCertificateDetail DescribeCdnCertificateDetail()
 * @method DescribeRefreshQuota DescribeRefreshQuota()
 * @method BatchDeleteCdnDomainConfig BatchDeleteCdnDomainConfig()
 * @method TagResources TagResources()
 * @method DescribeDomainUsageData DescribeDomainUsageData()
 * @method DescribeDomainCertificateInfo DescribeDomainCertificateInfo()
 * @method SetMacServiceConfig SetMacServiceConfig()
 * @method SetUserGreenManagerConfig SetUserGreenManagerConfig()
 * @method DescribeRealtimeDeliveryAcc DescribeRealtimeDeliveryAcc()
 * @method DeleteUsageDetailDataExportTask DeleteUsageDetailDataExportTask()
 * @method DescribeUserUsageDataExportTask DescribeUserUsageDataExportTask()
 * @method DescribeCdnUserBillType DescribeCdnUserBillType()
 * @method DescribeCdnUserQuota DescribeCdnUserQuota()
 * @method DescribeDomainPvData DescribeDomainPvData()
 * @method BatchUpdateCdnDomain BatchUpdateCdnDomain()
 * @method SetAliBusinessConfig SetAliBusinessConfig()
 * @method SetFileCacheExpiredConfig SetFileCacheExpiredConfig()
 * @method SetHttpHeaderConfig SetHttpHeaderConfig()
 * @method DescribeDomainHttpCodeData DescribeDomainHttpCodeData()
 * @method DescribeDomainBpsData DescribeDomainBpsData()
 * @method ModifyDomainCustomLogConfig ModifyDomainCustomLogConfig()
 * @method DescribeDomainHitRateData DescribeDomainHitRateData()
 * @method DescribeDomainFileSizeProportionData DescribeDomainFileSizeProportionData()
 * @method CreateUserUsageDataExportTask CreateUserUsageDataExportTask()
 * @method DescribeCurrentCharge95Info DescribeCurrentCharge95Info()
 * @method DescribeDomainQoSRt DescribeDomainQoSRt()
 * @method DescribeIpInfo DescribeIpInfo()
 * @method DescribeCdnDomainByCertificate DescribeCdnDomainByCertificate()
 * @method SetVarsConfig SetVarsConfig()
 * @method ModifyFileCacheExpiredConfig ModifyFileCacheExpiredConfig()
 * @method DescribeDomainsByCustomLogConfig DescribeDomainsByCustomLogConfig()
 * @method SetL2OssKeyConfig SetL2OssKeyConfig()
 * @method DescribeDomainHttpsData DescribeDomainHttpsData()
 * @method DescribeDomainIspLocationDetailData DescribeDomainIspLocationDetailData()
 * @method ListUserCustomLogConfig ListUserCustomLogConfig()
 * @method BatchStartCdnDomain BatchStartCdnDomain()
 * @method SetUserAgentAcessRestriction SetUserAgentAcessRestriction()
 * @method DescribeDomainAverageResponseTime DescribeDomainAverageResponseTime()
 * @method DescribeDomainRealTimeTrafficData DescribeDomainRealTimeTrafficData()
 * @method DeleteRealTimeLogLogstore DeleteRealTimeLogLogstore()
 * @method SetRangeConfig SetRangeConfig()
 * @method DescribeDomainQpsData DescribeDomainQpsData()
 * @method SetOssLogConfig SetOssLogConfig()
 * @method DescribeCdnUserResourcePackage DescribeCdnUserResourcePackage()
 * @method DescribeUserCustomLogConfig DescribeUserCustomLogConfig()
 * @method DescribeDomainRealTimeByteHitRateData DescribeDomainRealTimeByteHitRateData()
 * @method BatchSetCdnDomainConfig BatchSetCdnDomainConfig()
 * @method DescribeMacStatistic DescribeMacStatistic()
 * @method BatchAddCdnDomain BatchAddCdnDomain()
 * @method DeleteUserUsageDataExportTask DeleteUserUsageDataExportTask()
 * @method StartCdnDomain StartCdnDomain()
 * @method IsDiamondUser IsDiamondUser()
 * @method BatchDescribeDomainBpsData BatchDescribeDomainBpsData()
 * @method DescribeDomainRealTimeReqHitRateData DescribeDomainRealTimeReqHitRateData()
 * @method DescribeDomainRealtimeLogDelivery DescribeDomainRealtimeLogDelivery()
 * @method DescribeUserVipsByDomain DescribeUserVipsByDomain()
 * @method SetIpBlackListConfig SetIpBlackListConfig()
 * @method ListTagResources ListTagResources()
 * @method DescribeCdnDomainBillingData DescribeCdnDomainBillingData()
 * @method PreloadObjectCaches PreloadObjectCaches()
 * @method DescribeCustomLogConfig DescribeCustomLogConfig()
 * @method SetRegexRuleConfig SetRegexRuleConfig()
 */
class V20180510
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainRealTimeHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeDomainTopUrlVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainSrcTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setSources($sources)
 * @method string getSources()
 */
class DescribeDomainsBySource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setHeaderKey($headerKey)
 * @method string getHeaderKey()
 * @method $this setHeaderValue($headerValue)
 * @method string getHeaderValue()
 * @method $this setConfigID($configID)
 * @method string getConfigID()
 */
class ModifyHttpHeaderConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFileType($fileType)
 * @method string getFileType()
 * @method $this setCodeString($codeString)
 * @method string getCodeString()
 */
class SetFileTypeForceTtlCodeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setChargeItem($chargeItem)
 * @method string getChargeItem()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeHistoryCharge95Info extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class DescribeUserConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class ListDomainsByLogConfigId extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setSchemeOrigin($schemeOrigin)
 * @method string getSchemeOrigin()
 * @method $this setSchemeOriginPort($schemeOriginPort)
 * @method string getSchemeOriginPort()
 */
class SetForwardSchemeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeRealtimeLogAuthorized extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteCacheExpiredConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 */
class UntagResources extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainISPData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTriggerARN($triggerARN)
 * @method string getTriggerARN()
 * @method $this setEventMetaName($eventMetaName)
 * @method string getEventMetaName()
 * @method $this setEventMetaVersion($eventMetaVersion)
 * @method string getEventMetaVersion()
 * @method $this setSourceARN($sourceARN)
 * @method string getSourceARN()
 * @method $this setRoleARN($roleARN)
 * @method string getRoleARN()
 * @method $this setNotes($notes)
 * @method string getNotes()
 */
class AddFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setKey1($key1)
 * @method string getKey1()
 * @method $this setKey2($key2)
 * @method string getKey2()
 * @method $this setTimeOut($timeOut)
 * @method string getTimeOut()
 * @method $this setAuthRemoteDesc($authRemoteDesc)
 * @method string getAuthRemoteDesc()
 */
class SetReqAuthConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCacheContent($cacheContent)
 * @method string getCacheContent()
 * @method $this setTTL($tTL)
 * @method string getTTL()
 * @method $this setWeight($weight)
 * @method string getWeight()
 */
class SetPathCacheExpiredConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class DescribeUserUsageDetailDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setCertType($certType)
 * @method string getCertType()
 * @method $this setSSLProtocol($sSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sSLPri)
 * @method string getSSLPri()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setForceSet($forceSet)
 * @method string getForceSet()
 */
class BatchSetCdnDomainServerCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRedirectType($redirectType)
 * @method string getRedirectType()
 */
class SetForceRedirectConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogstore($logstore)
 * @method string getLogstore()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class ModifyRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setReferType($referType)
 * @method string getReferType()
 * @method $this setReferList($referList)
 * @method string getReferList()
 * @method $this setAllowEmpty($allowEmpty)
 * @method string getAllowEmpty()
 * @method $this setDisableAst($disableAst)
 * @method string getDisableAst()
 */
class SetRefererConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setAliAuthDual($aliAuthDual)
 * @method string getAliAuthDual()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetAliAuthConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserCdnStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setTimePoint($timePoint)
 * @method string getTimePoint()
 * @method $this setIspNames($ispNames)
 * @method string getIspNames()
 * @method $this setLocationNames($locationNames)
 * @method string getLocationNames()
 */
class DescribeDomainBpsDataByTimeStamp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setWaitUri($waitUri)
 * @method string getWaitUri()
 * @method $this setAllowPct($allowPct)
 * @method int getAllowPct()
 * @method $this setMaxTimeWait($maxTimeWait)
 * @method int getMaxTimeWait()
 * @method $this setGapTime($gapTime)
 * @method int getGapTime()
 * @method $this setWaitUrl($waitUrl)
 * @method string getWaitUrl()
 */
class SetWaitingRoomConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetReqHeaderConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTriggerARN($triggerARN)
 * @method string getTriggerARN()
 */
class DeleteFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogstore($logstore)
 * @method string getLogstore()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setProperty($property)
 * @method string getProperty()
 */
class ModifyCdnDomainSchdmByProperty extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageType($pageType)
 * @method string getPageType()
 * @method $this setCustomPageUrl($customPageUrl)
 * @method string getCustomPageUrl()
 */
class SetErrorPageConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIspNames($ispNames)
 * @method string getIspNames()
 * @method $this setLocationNames($locationNames)
 * @method string getLocationNames()
 */
class DescribeRangeDataByLocateAndIspService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeMacAppInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class PurgeObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setMaxage($maxage)
 * @method int getMaxage()
 */
class BlockObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainCname extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeCdnUserBillHistory extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class DescribeCdnTypes extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetPageCompressConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class RefreshObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDiamondDataId($diamondDataId)
 * @method string getDiamondDataId()
 */
class DescribeDiamondData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setExtensiveDomain($extensiveDomain)
 * @method string getExtensiveDomain()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeExtensiveDomainData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCdnType($cdnType)
 * @method string getCdnType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class AddCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainMax95BpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAllowIps($allowIps)
 * @method string getAllowIps()
 */
class SetIpAllowListConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 * @method $this setDomainSearchType($domainSearchType)
 * @method string getDomainSearchType()
 * @method $this setCdnType($cdnType)
 * @method string getCdnType()
 * @method $this setCheckDomainShow($checkDomainShow)
 * @method bool getCheckDomainShow()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setFuncId($funcId)
 * @method string getFuncId()
 * @method $this setFuncFilter($funcFilter)
 * @method string getFuncFilter()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class DescribeUserDomains extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRegionData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteHttpHeaderConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCdnDomainDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainPathData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeSrcBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DescribeRefreshTasks extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeCdnDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class ModifyCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainRealTimeMetric extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setHashKeyArgs($hashKeyArgs)
 * @method string getHashKeyArgs()
 * @method $this setKeepOssArgs($keepOssArgs)
 * @method string getKeepOssArgs()
 */
class SetIgnoreQueryStringConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeSrcTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetDomainGreenManagerConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setErrorCode($errorCode)
 * @method string getErrorCode()
 * @method $this setPageUrl($pageUrl)
 * @method string getPageUrl()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetHttpErrorPageConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class ListRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 */
class CreateUsageDetailDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 */
class ModifyCdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStopCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainUvData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class ListRealtimeLogDeliveryInfos extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeQpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogstore($logstore)
 * @method string getLogstore()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class CreateRealTimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setArea($area)
 * @method string getArea()
 */
class PushObjectCache extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigID($configID)
 * @method string getConfigID()
 * @method $this setCacheContent($cacheContent)
 * @method string getCacheContent()
 * @method $this setTTL($tTL)
 * @method string getTTL()
 * @method $this setWeight($weight)
 * @method string getWeight()
 */
class ModifyPathCacheExpiredConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 */
class DescribeDomainSlowRatio extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetVideoSeekConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class DeleteCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setCodeString($codeString)
 * @method string getCodeString()
 */
class SetPathForceTtlCodeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCdnCertificateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeL2VipsByDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAllowIps($allowIps)
 * @method string getAllowIps()
 * @method $this setBlockIps($blockIps)
 * @method string getBlockIps()
 */
class SetCcConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class EnableRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogstore($logstore)
 * @method string getLogstore()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class ListRealtimeLogDeliveryDomains extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setArea($area)
 * @method string getArea()
 */
class DescribeCdnUserBillPrediction extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainSrcBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetOptimizeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 * @method $this setPercent($percent)
 * @method string getPercent()
 */
class DescribeDomainTopReferVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainRealTimeSrcHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 */
class OpenCdnService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setNeedSum($needSum)
 * @method string getNeedSum()
 * @method $this setPno($pno)
 * @method string getPno()
 */
class DescribeDomainPnoData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setHttp2($http2)
 * @method string getHttp2()
 */
class SetHttpsOptionConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DisableRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setEventMetaName($eventMetaName)
 * @method string getEventMetaName()
 * @method $this setEventMetaVersion($eventMetaVersion)
 * @method string getEventMetaVersion()
 */
class ListFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setAliRemoveArgs($aliRemoveArgs)
 * @method string getAliRemoveArgs()
 * @method $this setKeepOssArgs($keepOssArgs)
 * @method string getKeepOssArgs()
 */
class SetRemoveQueryStringConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCdnRegionAndIsp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCdnHttpsDomainList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class ModifyUserCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setBackSrcDomain($backSrcDomain)
 * @method string getBackSrcDomain()
 */
class SetSourceHostConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainReqHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteSpecificConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class DescribeTagResources extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetWafConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setModuleFilterCondition($moduleFilterCondition)
 * @method string getModuleFilterCondition()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetSkipModuleConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTriggerARN($triggerARN)
 * @method string getTriggerARN()
 */
class DescribeFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeCdnDomainLogs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class DescribeTopDomainsByFlow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setCertType($certType)
 * @method string getCertType()
 * @method $this setServerCertificateStatus($serverCertificateStatus)
 * @method string getServerCertificateStatus()
 * @method $this setServerCertificate($serverCertificate)
 * @method string getServerCertificate()
 * @method $this setPrivateKey($privateKey)
 * @method string getPrivateKey()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setForceSet($forceSet)
 * @method string getForceSet()
 */
class SetDomainServerCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTriggerARN($triggerARN)
 * @method string getTriggerARN()
 * @method $this setSourceARN($sourceARN)
 * @method string getSourceARN()
 * @method $this setRoleARN($roleARN)
 * @method string getRoleARN()
 * @method $this setNotes($notes)
 * @method string getNotes()
 */
class UpdateFCTrigger extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setTimeOut($timeOut)
 * @method string getTimeOut()
 * @method $this setAuthAddr($authAddr)
 * @method string getAuthAddr()
 * @method $this setAuthCrash($authCrash)
 * @method string getAuthCrash()
 * @method $this setAuthEnable($authEnable)
 * @method string getAuthEnable()
 * @method $this setAuthProvider($authProvider)
 * @method string getAuthProvider()
 * @method $this setAuthPath($authPath)
 * @method string getAuthPath()
 * @method $this setAuthFileType($authFileType)
 * @method string getAuthFileType()
 */
class SetRemoteReqAuthConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainsUsageByDay extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserTags extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainSrcHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeCdnCertificateDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeRefreshQuota extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class BatchDeleteCdnDomainConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class TagResources extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDataProtocol($dataProtocol)
 * @method string getDataProtocol()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setArea($area)
 * @method string getArea()
 * @method $this setField($field)
 * @method string getField()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainUsageData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainCertificateInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnabled($enabled)
 * @method string getEnabled()
 * @method $this setProcessResult($processResult)
 * @method string getProcessResult()
 * @method $this setAppList($appList)
 * @method string getAppList()
 */
class SetMacServiceConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setQuota($quota)
 * @method string getQuota()
 * @method $this setRatio($ratio)
 * @method string getRatio()
 */
class SetUserGreenManagerConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogStore($logStore)
 * @method string getLogStore()
 */
class DescribeRealtimeDeliveryAcc extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteUsageDetailDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 */
class DescribeUserUsageDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeCdnUserBillType extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCdnUserQuota extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainPvData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class BatchUpdateCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAliBusinessType($aliBusinessType)
 * @method string getAliBusinessType()
 * @method $this setAliBusinessTable($aliBusinessTable)
 * @method string getAliBusinessTable()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetAliBusinessConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setCacheContent($cacheContent)
 * @method string getCacheContent()
 * @method $this setTTL($tTL)
 * @method string getTTL()
 */
class SetFileCacheExpiredConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setHeaderKey($headerKey)
 * @method string getHeaderKey()
 * @method $this setHeaderValue($headerValue)
 * @method string getHeaderValue()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetHttpHeaderConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class ModifyDomainCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainFileSizeProportionData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 */
class CreateUserUsageDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCurrentCharge95Info extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainQoSRt extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setIP($iP)
 * @method string getIP()
 */
class DescribeIpInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 */
class DescribeCdnDomainByCertificate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setVarName($varName)
 * @method string getVarName()
 * @method $this setVarValue($varValue)
 * @method string getVarValue()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetVarsConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigID($configID)
 * @method string getConfigID()
 * @method $this setCacheContent($cacheContent)
 * @method string getCacheContent()
 * @method $this setTTL($tTL)
 * @method string getTTL()
 * @method $this setWeight($weight)
 * @method string getWeight()
 */
class ModifyFileCacheExpiredConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DescribeDomainsByCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPrivateOssAuth($privateOssAuth)
 * @method string getPrivateOssAuth()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetL2OssKeyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeDomainHttpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainIspLocationDetailData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class ListUserCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStartCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setUserAgent($userAgent)
 * @method string getUserAgent()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetUserAgentAcessRestriction extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setDomainType($domainType)
 * @method string getDomainType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainAverageResponseTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLogstore($logstore)
 * @method string getLogstore()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DeleteRealTimeLogLogstore extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetRangeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeDomainQpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setPrefix($prefix)
 * @method string getPrefix()
 */
class SetOssLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeCdnUserResourcePackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeByteHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($functions)
 * @method string getFunctions()
 */
class BatchSetCdnDomainConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCarrierOperator($carrierOperator)
 * @method string getCarrierOperator()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setProtocol($protocol)
 * @method string getProtocol()
 */
class DescribeMacStatistic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setCdnType($cdnType)
 * @method string getCdnType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class BatchAddCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DeleteUserUsageDataExportTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartCdnDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDiamondDataId($diamondDataId)
 * @method string getDiamondDataId()
 */
class IsDiamondUser extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class BatchDescribeDomainBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainRealTimeReqHitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainRealtimeLogDelivery extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAvailable($available)
 * @method string getAvailable()
 */
class DescribeUserVipsByDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setBlockIps($blockIps)
 * @method string getBlockIps()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetIpBlackListConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTagOwnerUid($tagOwnerUid)
 * @method string getTagOwnerUid()
 * @method $this setTagOwnerBid($tagOwnerBid)
 * @method string getTagOwnerBid()
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
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setArea($area)
 * @method string getArea()
 * @method $this setProtocol($protocol)
 * @method string getProtocol()
 * @method $this setTrafficType($trafficType)
 * @method string getTrafficType()
 */
class DescribeCdnDomainBillingData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setObjectPath($objectPath)
 * @method string getObjectPath()
 * @method $this setArea($area)
 * @method string getArea()
 */
class PreloadObjectCaches extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DescribeCustomLogConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setEnabled($enabled)
 * @method string getEnabled()
 * @method $this setUri($uri)
 * @method string getUri()
 * @method $this setOrigin($origin)
 * @method string getOrigin()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 */
class SetRegexRuleConfig extends Request
{

}