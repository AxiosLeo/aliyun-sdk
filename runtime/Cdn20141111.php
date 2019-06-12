<?php

namespace aliyun\sdk\services\Cdn20141111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20141111
 *
 * @package aliyun\sdk\services\Cdn20141111
 * @method DescribeDomainRealTimeHttpCodeData DescribeDomainRealTimeHttpCodeData()
 * @method DescribeDomainTopUrlVisit DescribeDomainTopUrlVisit()
 * @method AddLiveDomainMapping AddLiveDomainMapping()
 * @method DescribeDomainsBySource DescribeDomainsBySource()
 * @method SetDynamicConfig SetDynamicConfig()
 * @method DescribeDomainConfigs DescribeDomainConfigs()
 * @method ModifyHttpHeaderConfig ModifyHttpHeaderConfig()
 * @method DescribeUserConfigs DescribeUserConfigs()
 * @method DescribeLiveStreamsOnlineList DescribeLiveStreamsOnlineList()
 * @method ListDomainsByLogConfigId ListDomainsByLogConfigId()
 * @method SetForwardSchemeConfig SetForwardSchemeConfig()
 * @method DeleteCacheExpiredConfig DeleteCacheExpiredConfig()
 * @method DescribeDomainISPData DescribeDomainISPData()
 * @method AddFCTrigger AddFCTrigger()
 * @method SetReqAuthConfig SetReqAuthConfig()
 * @method DescribeL2VipsByDynamicDomain DescribeL2VipsByDynamicDomain()
 * @method ForbidLiveStream ForbidLiveStream()
 * @method SetPathCacheExpiredConfig SetPathCacheExpiredConfig()
 * @method SetForceRedirectConfig SetForceRedirectConfig()
 * @method SetRefererConfig SetRefererConfig()
 * @method DescribeDomainBpsDataByTimeStamp DescribeDomainBpsDataByTimeStamp()
 * @method SetWaitingRoomConfig SetWaitingRoomConfig()
 * @method SetReqHeaderConfig SetReqHeaderConfig()
 * @method DeleteFCTrigger DeleteFCTrigger()
 * @method DescribeDomainCustomLogConfig DescribeDomainCustomLogConfig()
 * @method SetErrorPageConfig SetErrorPageConfig()
 * @method DescribeRangeDataByLocateAndIspService DescribeRangeDataByLocateAndIspService()
 * @method DescribeDomainCname DescribeDomainCname()
 * @method DescribeCdnTypes DescribeCdnTypes()
 * @method SetPageCompressConfig SetPageCompressConfig()
 * @method RefreshObjectCaches RefreshObjectCaches()
 * @method DescribeLiveStreamsBlockList DescribeLiveStreamsBlockList()
 * @method CreateLiveStreamRecordIndexFiles CreateLiveStreamRecordIndexFiles()
 * @method AddCdnDomain AddCdnDomain()
 * @method DescribeDomainMax95BpsData DescribeDomainMax95BpsData()
 * @method SetIpAllowListConfig SetIpAllowListConfig()
 * @method DescribeUserDomains DescribeUserDomains()
 * @method DescribeDomainRegionData DescribeDomainRegionData()
 * @method DeleteHttpHeaderConfig DeleteHttpHeaderConfig()
 * @method DescribeCdnDomainDetail DescribeCdnDomainDetail()
 * @method DescribeLiveStreamsControlHistory DescribeLiveStreamsControlHistory()
 * @method DescribeDomainPathData DescribeDomainPathData()
 * @method DescribeDomainRealTimeBpsData DescribeDomainRealTimeBpsData()
 * @method DescribeLiveStreamOnlineUserNum DescribeLiveStreamOnlineUserNum()
 * @method DescribeDomainRealTimeSrcBpsData DescribeDomainRealTimeSrcBpsData()
 * @method DescribeRefreshTasks DescribeRefreshTasks()
 * @method DescribeCdnDomainConfigs DescribeCdnDomainConfigs()
 * @method ModifyCdnDomain ModifyCdnDomain()
 * @method DescribeCdnService DescribeCdnService()
 * @method SetIgnoreQueryStringConfig SetIgnoreQueryStringConfig()
 * @method DescribeDomainRealTimeSrcTrafficData DescribeDomainRealTimeSrcTrafficData()
 * @method SetDomainGreenManagerConfig SetDomainGreenManagerConfig()
 * @method SetHttpErrorPageConfig SetHttpErrorPageConfig()
 * @method StopMixStreamsService StopMixStreamsService()
 * @method DescribeLiveStreamTranscodeInfo DescribeLiveStreamTranscodeInfo()
 * @method ModifyCdnService ModifyCdnService()
 * @method DescribeDomainUvData DescribeDomainUvData()
 * @method DescribeLiveRecordConfig DescribeLiveRecordConfig()
 * @method StopCdnDomain StopCdnDomain()
 * @method DescribeDomainRealTimeQpsData DescribeDomainRealTimeQpsData()
 * @method PushObjectCache PushObjectCache()
 * @method ModifyPathCacheExpiredConfig ModifyPathCacheExpiredConfig()
 * @method DescribeDomainSlowRatio DescribeDomainSlowRatio()
 * @method SetVideoSeekConfig SetVideoSeekConfig()
 * @method DeleteCdnDomain DeleteCdnDomain()
 * @method DescribeL2VipsByDomain DescribeL2VipsByDomain()
 * @method SetCcConfig SetCcConfig()
 * @method DescribeDomainSrcBpsData DescribeDomainSrcBpsData()
 * @method SetOptimizeConfig SetOptimizeConfig()
 * @method DescribeDomainTopReferVisit DescribeDomainTopReferVisit()
 * @method DescribeLiveStreamSnapshotInfo DescribeLiveStreamSnapshotInfo()
 * @method StartMixStreamsService StartMixStreamsService()
 * @method OpenCdnService OpenCdnService()
 * @method SetHttpsOptionConfig SetHttpsOptionConfig()
 * @method DescribeLivePullStreamConfig DescribeLivePullStreamConfig()
 * @method DescribeLiveStreamRecordContent DescribeLiveStreamRecordContent()
 * @method SetRemoveQueryStringConfig SetRemoveQueryStringConfig()
 * @method DescribeCdnRegionAndIsp DescribeCdnRegionAndIsp()
 * @method AddLiveStreamTranscode AddLiveStreamTranscode()
 * @method ResumeLiveStream ResumeLiveStream()
 * @method UpdateLiveAppSnapshotConfig UpdateLiveAppSnapshotConfig()
 * @method ModifyUserCustomLogConfig ModifyUserCustomLogConfig()
 * @method DeleteLiveDomainMapping DeleteLiveDomainMapping()
 * @method SetSourceHostConfig SetSourceHostConfig()
 * @method DescribeDomainReqHitRateData DescribeDomainReqHitRateData()
 * @method DeleteSpecificConfig DeleteSpecificConfig()
 * @method DescribeFCTrigger DescribeFCTrigger()
 * @method DescribeCdnDomainLogs DescribeCdnDomainLogs()
 * @method DescribeTopDomainsByFlow DescribeTopDomainsByFlow()
 * @method SetDomainServerCertificate SetDomainServerCertificate()
 * @method UpdateFCTrigger UpdateFCTrigger()
 * @method DeleteLiveAppSnapshotConfig DeleteLiveAppSnapshotConfig()
 * @method DescribeDomainsUsageByDay DescribeDomainsUsageByDay()
 * @method AddLiveAppSnapshotConfig AddLiveAppSnapshotConfig()
 * @method DescribeRefreshQuota DescribeRefreshQuota()
 * @method BatchDeleteCdnDomainConfig BatchDeleteCdnDomainConfig()
 * @method AddLiveAppRecordConfig AddLiveAppRecordConfig()
 * @method DescribeDomainCertificateInfo DescribeDomainCertificateInfo()
 * @method SetUserGreenManagerConfig SetUserGreenManagerConfig()
 * @method DescribeCdnUserQuota DescribeCdnUserQuota()
 * @method DescribeDomainPvData DescribeDomainPvData()
 * @method DescribeDomainCCAttackInfo DescribeDomainCCAttackInfo()
 * @method DescribeLiveStreamRecordIndexFile DescribeLiveStreamRecordIndexFile()
 * @method SetFileCacheExpiredConfig SetFileCacheExpiredConfig()
 * @method SetHttpHeaderConfig SetHttpHeaderConfig()
 * @method DescribeDomainHttpCodeData DescribeDomainHttpCodeData()
 * @method DescribeDomainBpsData DescribeDomainBpsData()
 * @method ModifyDomainCustomLogConfig ModifyDomainCustomLogConfig()
 * @method DescribeLiveStreamBitRateData DescribeLiveStreamBitRateData()
 * @method DescribeDomainHitRateData DescribeDomainHitRateData()
 * @method DescribeLiveStreamsFrameRateAndBitRateData DescribeLiveStreamsFrameRateAndBitRateData()
 * @method DescribeDomainFileSizeProportionData DescribeDomainFileSizeProportionData()
 * @method DescribeIpInfo DescribeIpInfo()
 * @method DescribeCdnMonitorData DescribeCdnMonitorData()
 * @method DescribeLiveStreamsPublishList DescribeLiveStreamsPublishList()
 * @method ModifyFileCacheExpiredConfig ModifyFileCacheExpiredConfig()
 * @method SetL2OssKeyConfig SetL2OssKeyConfig()
 * @method SetLiveStreamsNotifyUrlConfig SetLiveStreamsNotifyUrlConfig()
 * @method DescribeDomainFlowData DescribeDomainFlowData()
 * @method DescribeDomainSrcFlowData DescribeDomainSrcFlowData()
 * @method DeleteLiveAppRecordConfig DeleteLiveAppRecordConfig()
 * @method DescribeDomainAverageResponseTime DescribeDomainAverageResponseTime()
 * @method SetRangeConfig SetRangeConfig()
 * @method DescribeDomainQpsData DescribeDomainQpsData()
 * @method DescribeUserCustomLogConfig DescribeUserCustomLogConfig()
 * @method DescribeDomainRealTimeByteHitRateData DescribeDomainRealTimeByteHitRateData()
 * @method BatchSetCdnDomainConfig BatchSetCdnDomainConfig()
 * @method StartCdnDomain StartCdnDomain()
 * @method DescribeDomainRealTimeReqHitRateData DescribeDomainRealTimeReqHitRateData()
 * @method DescribeLiveSnapshotConfig DescribeLiveSnapshotConfig()
 * @method SetIpBlackListConfig SetIpBlackListConfig()
 * @method DescribeDomainCCData DescribeDomainCCData()
 * @method DescribeUserCustomerLabels DescribeUserCustomerLabels()
 * @method DeleteLiveStreamTranscode DeleteLiveStreamTranscode()
 * @method DescribeLiveStreamRecordIndexFiles DescribeLiveStreamRecordIndexFiles()
 * @method DescribeCustomLogConfig DescribeCustomLogConfig()
 */
class V20141111
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
 * @method $this setSortBy($sortBy)
 * @method string getSortBy()
 */
class DescribeDomainTopUrlVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setPushDomain($pushDomain)
 * @method string getPushDomain()
 * @method $this setPullDomain($pullDomain)
 * @method string getPullDomain()
 */
class AddLiveDomainMapping extends Request
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
 * @method $this setDynamicOrigin($dynamicOrigin)
 * @method string getDynamicOrigin()
 * @method $this setStaticType($staticType)
 * @method string getStaticType()
 * @method $this setStaticUri($staticUri)
 * @method string getStaticUri()
 * @method $this setStaticPath($staticPath)
 * @method string getStaticPath()
 * @method $this setDynamicCacheControl($dynamicCacheControl)
 * @method string getDynamicCacheControl()
 */
class SetDynamicConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigList($configList)
 * @method string getConfigList()
 */
class DescribeDomainConfigs extends Request
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
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class DescribeUserConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 */
class DescribeLiveStreamsOnlineList extends Request
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
 * @method $this setEnable($enable)
 * @method string getEnable()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCacheType($cacheType)
 * @method string getCacheType()
 * @method $this setConfigID($configID)
 * @method string getConfigID()
 */
class DeleteCacheExpiredConfig extends Request
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
 * @method $this setFunctionARN($functionARN)
 * @method string getFunctionARN()
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
 */
class DescribeL2VipsByDynamicDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLiveStreamType($liveStreamType)
 * @method string getLiveStreamType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setResumeTime($resumeTime)
 * @method string getResumeTime()
 */
class ForbidLiveStream extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeDomainCname extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveStreamsBlockList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setOssEndpoint($ossEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOssObject($ossObject)
 * @method string getOssObject()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class CreateLiveStreamRecordIndexFiles extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCdnType($cdnType)
 * @method string getCdnType()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setSourcePort($sourcePort)
 * @method int getSourcePort()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setPriorities($priorities)
 * @method string getPriorities()
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
 * @method $this setSources($sources)
 * @method string getSources()
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
 * @method $this setConfigID($configID)
 * @method string getConfigID()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamsControlHistory extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setHlsSwitch($hlsSwitch)
 * @method string getHlsSwitch()
 */
class DescribeLiveStreamOnlineUserNum extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
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
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourcePort($sourcePort)
 * @method int getSourcePort()
 * @method $this setSources($sources)
 * @method string getSources()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPriorities($priorities)
 * @method string getPriorities()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
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
 * @method $this setPageUrl($pageUrl)
 * @method string getPageUrl()
 * @method $this setErrorCode($errorCode)
 * @method string getErrorCode()
 */
class SetHttpErrorPageConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setMainDomainName($mainDomainName)
 * @method string getMainDomainName()
 * @method $this setMainAppName($mainAppName)
 * @method string getMainAppName()
 * @method $this setMainStreamName($mainStreamName)
 * @method string getMainStreamName()
 * @method $this setMixDomainName($mixDomainName)
 * @method string getMixDomainName()
 * @method $this setMixAppName($mixAppName)
 * @method string getMixAppName()
 * @method $this setMixStreamName($mixStreamName)
 * @method string getMixStreamName()
 */
class StopMixStreamsService extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainTranscodeName($domainTranscodeName)
 * @method string getDomainTranscodeName()
 */
class DescribeLiveStreamTranscodeInfo extends Request
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
class DescribeLiveRecordConfig extends Request
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
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetVideoSeekConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setFixTimeGap($fixTimeGap)
 * @method string getFixTimeGap()
 */
class DescribeDomainSrcBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
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
 */
class DescribeDomainTopReferVisit extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamSnapshotInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setMainDomainName($mainDomainName)
 * @method string getMainDomainName()
 * @method $this setMainAppName($mainAppName)
 * @method string getMainAppName()
 * @method $this setMainStreamName($mainStreamName)
 * @method string getMainStreamName()
 * @method $this setMixDomainName($mixDomainName)
 * @method string getMixDomainName()
 * @method $this setMixAppName($mixAppName)
 * @method string getMixAppName()
 * @method $this setMixStreamName($mixStreamName)
 * @method string getMixStreamName()
 * @method $this setMixTemplate($mixTemplate)
 * @method string getMixTemplate()
 * @method $this setMixType($mixType)
 * @method string getMixType()
 */
class StartMixStreamsService extends Request
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
 * @method $this setHttp2($http2)
 * @method string getHttp2()
 */
class SetHttpsOptionConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLivePullStreamConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamRecordContent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 * @method $this setRecord($record)
 * @method string getRecord()
 * @method $this setSnapshot($snapshot)
 * @method string getSnapshot()
 * @method $this setApp($app)
 * @method string getApp()
 */
class AddLiveStreamTranscode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setLiveStreamType($liveStreamType)
 * @method string getLiveStreamType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 */
class ResumeLiveStream extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setOssEndpoint($ossEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOverwriteOssObject($overwriteOssObject)
 * @method string getOverwriteOssObject()
 * @method $this setSequenceOssObject($sequenceOssObject)
 * @method string getSequenceOssObject()
 */
class UpdateLiveAppSnapshotConfig extends Request
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
 * @method $this setPushDomain($pushDomain)
 * @method string getPushDomain()
 * @method $this setPullDomain($pullDomain)
 * @method string getPullDomain()
 */
class DeleteLiveDomainMapping extends Request
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
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteSpecificConfig extends Request
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
 * @method $this setLogDay($logDay)
 * @method string getLogDay()
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
 * @method $this setServerCertificateStatus($serverCertificateStatus)
 * @method string getServerCertificateStatus()
 * @method $this setServerCertificate($serverCertificate)
 * @method string getServerCertificate()
 * @method $this setPrivateKey($privateKey)
 * @method string getPrivateKey()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCertType($certType)
 * @method string getCertType()
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
 * @method $this setFunctionARN($functionARN)
 * @method string getFunctionARN()
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveAppSnapshotConfig extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setOssEndpoint($ossEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOverwriteOssObject($overwriteOssObject)
 * @method string getOverwriteOssObject()
 * @method $this setSequenceOssObject($sequenceOssObject)
 * @method string getSequenceOssObject()
 */
class AddLiveAppSnapshotConfig extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setOssEndpoint($ossEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOssObjectPrefix($ossObjectPrefix)
 * @method string getOssObjectPrefix()
 */
class AddLiveAppRecordConfig extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDomainCCAttackInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeLiveStreamRecordIndexFile extends Request
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
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 */
class DescribeDomainHttpCodeData extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamBitRateData extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamsFrameRateAndBitRateData extends Request
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
 * @method $this setIP($iP)
 * @method string getIP()
 */
class DescribeIpInfo extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeCdnMonitorData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeLiveStreamsPublishList extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPrivateOssAuth($privateOssAuth)
 * @method string getPrivateOssAuth()
 */
class SetL2OssKeyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class SetLiveStreamsNotifyUrlConfig extends Request
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
class DescribeDomainFlowData extends Request
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
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setFixTimeGap($fixTimeGap)
 * @method string getFixTimeGap()
 */
class DescribeDomainSrcFlowData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveAppRecordConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTimeMerge($timeMerge)
 * @method string getTimeMerge()
 * @method $this setOutString($outString)
 * @method string getOutString()
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
 * @method $this setEnable($enable)
 * @method string getEnable()
 */
class SetRangeConfig extends Request
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
class DescribeDomainQpsData extends Request
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
 */
class StartCdnDomain extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class DescribeLiveSnapshotConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setBlockIps($blockIps)
 * @method string getBlockIps()
 */
class SetIpBlackListConfig extends Request
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
class DescribeDomainCCData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setUid($uid)
 * @method int getUid()
 */
class DescribeUserCustomerLabels extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 * @method $this setApp($app)
 * @method string getApp()
 */
class DeleteLiveStreamTranscode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveStreamRecordIndexFiles extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DescribeCustomLogConfig extends Request
{

}