<?php

namespace aliyun\sdk\services\Live20161101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20161101
 *
 * @package aliyun\sdk\services\Live20161101
 * @method DescribeLiveDomainRealTimeBpsData DescribeLiveDomainRealTimeBpsData()
 * @method AddLiveDomainMapping AddLiveDomainMapping()
 * @method AllowPushStream AllowPushStream()
 * @method AddCasterEpisodeGroup AddCasterEpisodeGroup()
 * @method DescribeCasterProgram DescribeCasterProgram()
 * @method DescribeBoardSnapshot DescribeBoardSnapshot()
 * @method SetCasterConfig SetCasterConfig()
 * @method DescribeLiveStreamsOnlineList DescribeLiveStreamsOnlineList()
 * @method AddCasterComponent AddCasterComponent()
 * @method StartBoardRecord StartBoardRecord()
 * @method SetCasterSceneConfig SetCasterSceneConfig()
 * @method DeleteCasterEpisodeGroup DeleteCasterEpisodeGroup()
 * @method ForbidLiveStream ForbidLiveStream()
 * @method DescribeUpBpsPeakOfLine DescribeUpBpsPeakOfLine()
 * @method AddCasterEpisode AddCasterEpisode()
 * @method CompleteBoard CompleteBoard()
 * @method DescribeCasterStreamUrl DescribeCasterStreamUrl()
 * @method DescribeLiveSnapshotDetectPornConfig DescribeLiveSnapshotDetectPornConfig()
 * @method AddLivePullStreamInfoConfig AddLivePullStreamInfoConfig()
 * @method DeleteRoom DeleteRoom()
 * @method DescribeLiveRecordNotifyConfig DescribeLiveRecordNotifyConfig()
 * @method DescribeLiveTopDomainsByFlow DescribeLiveTopDomainsByFlow()
 * @method DescribeLiveUserDomains DescribeLiveUserDomains()
 * @method BatchDeleteLiveDomainConfigs BatchDeleteLiveDomainConfigs()
 * @method AddTrancodeSEI AddTrancodeSEI()
 * @method StopCasterScene StopCasterScene()
 * @method DescribeCasterChannels DescribeCasterChannels()
 * @method DescribeLiveDomainDetail DescribeLiveDomainDetail()
 * @method DescribeCasterRtcInfo DescribeCasterRtcInfo()
 * @method DescribeCasterSceneAudio DescribeCasterSceneAudio()
 * @method DescribeLiveStreamsBlockList DescribeLiveStreamsBlockList()
 * @method EffectCasterVideoResource EffectCasterVideoResource()
 * @method CreateLiveStreamRecordIndexFiles CreateLiveStreamRecordIndexFiles()
 * @method SendRoomNotification SendRoomNotification()
 * @method DeleteCaster DeleteCaster()
 * @method AddLiveRecordNotifyConfig AddLiveRecordNotifyConfig()
 * @method StopLiveIndex StopLiveIndex()
 * @method DescribeLiveStreamsControlHistory DescribeLiveStreamsControlHistory()
 * @method AddCasterProgram AddCasterProgram()
 * @method DescribeCasterVideoResources DescribeCasterVideoResources()
 * @method DescribeLiveDomainRealTimeHttpCodeData DescribeLiveDomainRealTimeHttpCodeData()
 * @method SetCasterChannel SetCasterChannel()
 * @method RealTimeRecordCommand RealTimeRecordCommand()
 * @method DescribeForbidPushStreamRoomList DescribeForbidPushStreamRoomList()
 * @method DeleteCasterLayout DeleteCasterLayout()
 * @method DescribeLiveDomainTranscodeData DescribeLiveDomainTranscodeData()
 * @method DescribeLiveStreamOnlineUserNum DescribeLiveStreamOnlineUserNum()
 * @method UpdateLiveSnapshotDetectPornConfig UpdateLiveSnapshotDetectPornConfig()
 * @method DescribeCasters DescribeCasters()
 * @method AddLiveDomain AddLiveDomain()
 * @method DescribeLiveDomainConfigs DescribeLiveDomainConfigs()
 * @method AddCasterEpisodeGroupContent AddCasterEpisodeGroupContent()
 * @method DeleteLiveDetectNotifyConfig DeleteLiveDetectNotifyConfig()
 * @method SendRoomUserNotification SendRoomUserNotification()
 * @method DescribeLiveStreamCount DescribeLiveStreamCount()
 * @method UpdateLiveDetectNotifyConfig UpdateLiveDetectNotifyConfig()
 * @method DescribeLiveStreamTranscodeInfo DescribeLiveStreamTranscodeInfo()
 * @method DeleteLiveDomain DeleteLiveDomain()
 * @method DescribeLiveStreamsNotifyUrlConfig DescribeLiveStreamsNotifyUrlConfig()
 * @method DescribeLiveRecordConfig DescribeLiveRecordConfig()
 * @method DescribeRecords DescribeRecords()
 * @method DescribeLiveCertificateList DescribeLiveCertificateList()
 * @method SetLiveLazyPullStreamInfoConfig SetLiveLazyPullStreamInfoConfig()
 * @method DeleteLiveStreamsNotifyUrlConfig DeleteLiveStreamsNotifyUrlConfig()
 * @method DescribeCasterLayouts DescribeCasterLayouts()
 * @method BatchSetLiveDomainConfigs BatchSetLiveDomainConfigs()
 * @method StartCasterScene StartCasterScene()
 * @method EffectCasterUrgent EffectCasterUrgent()
 * @method UpdateCasterSceneAudio UpdateCasterSceneAudio()
 * @method AddCustomLiveStreamTranscode AddCustomLiveStreamTranscode()
 * @method DeleteLivePullStreamInfoConfig DeleteLivePullStreamInfoConfig()
 * @method StartCaster StartCaster()
 * @method DescribeLiveStreamSnapshotInfo DescribeLiveStreamSnapshotInfo()
 * @method DeleteCasterComponent DeleteCasterComponent()
 * @method DescribeLiveDomainRecordData DescribeLiveDomainRecordData()
 * @method DeleteBoard DeleteBoard()
 * @method SetLiveDomainCertificate SetLiveDomainCertificate()
 * @method DescribeLivePullStreamConfig DescribeLivePullStreamConfig()
 * @method DescribeLiveStreamRecordContent DescribeLiveStreamRecordContent()
 * @method AddLiveStreamTranscode AddLiveStreamTranscode()
 * @method DescribeLiveStreamHistoryUserNum DescribeLiveStreamHistoryUserNum()
 * @method ResumeLiveStream ResumeLiveStream()
 * @method UpdateLiveAppSnapshotConfig UpdateLiveAppSnapshotConfig()
 * @method DeleteLiveDomainMapping DeleteLiveDomainMapping()
 * @method DescribeLiveDomainBpsData DescribeLiveDomainBpsData()
 * @method AddCasterVideoResource AddCasterVideoResource()
 * @method DescribeBoards DescribeBoards()
 * @method ForbidPushStream ForbidPushStream()
 * @method DeleteLiveAppSnapshotConfig DeleteLiveAppSnapshotConfig()
 * @method DeleteLiveSnapshotDetectPornConfig DeleteLiveSnapshotDetectPornConfig()
 * @method CreateRoom CreateRoom()
 * @method DescribeLiveDomainSnapshotData DescribeLiveDomainSnapshotData()
 * @method AddLiveAppSnapshotConfig AddLiveAppSnapshotConfig()
 * @method SetBoardCallback SetBoardCallback()
 * @method DescribeCasterConfig DescribeCasterConfig()
 * @method DescribeLiveDomainMapping DescribeLiveDomainMapping()
 * @method CreateCaster CreateCaster()
 * @method DeleteLiveRecordVodConfig DeleteLiveRecordVodConfig()
 * @method DescribeLiveRecordVodConfigs DescribeLiveRecordVodConfigs()
 * @method ModifyCasterLayout ModifyCasterLayout()
 * @method CopyCasterSceneConfig CopyCasterSceneConfig()
 * @method AddCasterLayout AddCasterLayout()
 * @method DescribeUpBpsPeakData DescribeUpBpsPeakData()
 * @method AddLiveAppRecordConfig AddLiveAppRecordConfig()
 * @method DescribeLiveCertificateDetail DescribeLiveCertificateDetail()
 * @method DeleteCasterEpisode DeleteCasterEpisode()
 * @method DeleteCasterSceneConfig DeleteCasterSceneConfig()
 * @method DescribeCasterScenes DescribeCasterScenes()
 * @method DescribeLiveDetectNotifyConfig DescribeLiveDetectNotifyConfig()
 * @method CreateBoard CreateBoard()
 * @method CompleteBoardRecord CompleteBoardRecord()
 * @method ModifyCasterEpisode ModifyCasterEpisode()
 * @method DescribeLiveStreamRecordIndexFile DescribeLiveStreamRecordIndexFile()
 * @method DescribeBoardEvents DescribeBoardEvents()
 * @method RealTimeSnapshotCommand RealTimeSnapshotCommand()
 * @method ApplyBoardToken ApplyBoardToken()
 * @method StartLiveDomain StartLiveDomain()
 * @method DescribeRecord DescribeRecord()
 * @method DeleteLiveRecordNotifyConfig DeleteLiveRecordNotifyConfig()
 * @method DescribeLiveStreamBitRateData DescribeLiveStreamBitRateData()
 * @method DescribeCasterComponents DescribeCasterComponents()
 * @method DescribeLiveStreamsFrameRateAndBitRateData DescribeLiveStreamsFrameRateAndBitRateData()
 * @method StartLiveIndex StartLiveIndex()
 * @method UpdateBoard UpdateBoard()
 * @method DescribeLiveStreamsPublishList DescribeLiveStreamsPublishList()
 * @method AddLiveDetectNotifyConfig AddLiveDetectNotifyConfig()
 * @method DescribeUpPeakPublishStreamData DescribeUpPeakPublishStreamData()
 * @method UpdateBoardCallback UpdateBoardCallback()
 * @method SetLiveStreamsNotifyUrlConfig SetLiveStreamsNotifyUrlConfig()
 * @method AddLiveRecordVodConfig AddLiveRecordVodConfig()
 * @method DescribeLiveDomainTrafficData DescribeLiveDomainTrafficData()
 * @method DescribeLiveDomainRealTimeTrafficData DescribeLiveDomainRealTimeTrafficData()
 * @method DescribeHlsLiveStreamRealTimeBpsData DescribeHlsLiveStreamRealTimeBpsData()
 * @method UpdateCasterSceneConfig UpdateCasterSceneConfig()
 * @method DeleteLiveLazyPullStreamInfoConfig DeleteLiveLazyPullStreamInfoConfig()
 * @method AddLiveSnapshotDetectPornConfig AddLiveSnapshotDetectPornConfig()
 * @method DeleteLiveAppRecordConfig DeleteLiveAppRecordConfig()
 * @method StopCaster StopCaster()
 * @method ModifyCasterVideoResource ModifyCasterVideoResource()
 * @method DeleteCasterVideoResource DeleteCasterVideoResource()
 * @method DescribeRoomKickoutUserList DescribeRoomKickoutUserList()
 * @method DeleteCasterProgram DeleteCasterProgram()
 * @method DescribeRoomList DescribeRoomList()
 * @method ModifyCasterProgram ModifyCasterProgram()
 * @method ApplyRecordToken ApplyRecordToken()
 * @method StopLiveDomain StopLiveDomain()
 * @method JoinBoard JoinBoard()
 * @method DescribeLiveLazyPullStreamConfig DescribeLiveLazyPullStreamConfig()
 * @method DescribeLiveSnapshotConfig DescribeLiveSnapshotConfig()
 * @method CopyCaster CopyCaster()
 * @method ModifyCasterComponent ModifyCasterComponent()
 * @method DescribeRoomStatus DescribeRoomStatus()
 * @method DeleteLiveStreamTranscode DeleteLiveStreamTranscode()
 * @method UpdateLiveRecordNotifyConfig UpdateLiveRecordNotifyConfig()
 * @method DescribeLiveStreamRecordIndexFiles DescribeLiveStreamRecordIndexFiles()
 */
class V20161101
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
class DescribeLiveDomainRealTimeBpsData extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class AllowPushStream extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setItem($item)
 * @method array getItem()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setRepeatNum($repeatNum)
 * @method int getRepeatNum()
 * @method $this setSideOutputUrl($sideOutputUrl)
 * @method string getSideOutputUrl()
 * @method $this setCallbackUrl($callbackUrl)
 * @method string getCallbackUrl()
 */
class AddCasterEpisodeGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisodeId($episodeId)
 * @method string getEpisodeId()
 * @method $this setEpisodeType($episodeType)
 * @method string getEpisodeType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class DescribeCasterProgram extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class DescribeBoardSnapshot extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setCasterName($casterName)
 * @method string getCasterName()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setTranscodeConfig($transcodeConfig)
 * @method string getTranscodeConfig()
 * @method $this setRecordConfig($recordConfig)
 * @method string getRecordConfig()
 * @method $this setDelay($delay)
 * @method Float getDelay()
 * @method $this setUrgentMaterialId($urgentMaterialId)
 * @method string getUrgentMaterialId()
 * @method $this setSideOutputUrl($sideOutputUrl)
 * @method string getSideOutputUrl()
 * @method $this setCallbackUrl($callbackUrl)
 * @method string getCallbackUrl()
 * @method $this setProgramEffect($programEffect)
 * @method int getProgramEffect()
 * @method $this setProgramName($programName)
 * @method string getProgramName()
 * @method $this setChannelEnable($channelEnable)
 * @method int getChannelEnable()
 */
class SetCasterConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 */
class DescribeLiveStreamsOnlineList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setComponentName($componentName)
 * @method string getComponentName()
 * @method $this setLocationId($locationId)
 * @method string getLocationId()
 * @method $this setComponentType($componentType)
 * @method string getComponentType()
 * @method $this setEffect($effect)
 * @method string getEffect()
 * @method $this setComponentLayer($componentLayer)
 * @method string getComponentLayer()
 * @method $this setTextLayerContent($textLayerContent)
 * @method string getTextLayerContent()
 * @method $this setImageLayerContent($imageLayerContent)
 * @method string getImageLayerContent()
 * @method $this setCaptionLayerContent($captionLayerContent)
 * @method string getCaptionLayerContent()
 */
class AddCasterComponent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 */
class StartBoardRecord extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setLayoutId($layoutId)
 * @method string getLayoutId()
 * @method $this setComponentId($componentId)
 * @method array getComponentId()
 */
class SetCasterSceneConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setProgramId($programId)
 * @method string getProgramId()
 */
class DeleteCasterEpisodeGroup extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setLiveStreamType($liveStreamType)
 * @method string getLiveStreamType()
 * @method $this setOneshot($oneshot)
 * @method string getOneshot()
 * @method $this setControlStreamAction($controlStreamAction)
 * @method string getControlStreamAction()
 * @method $this setResumeTime($resumeTime)
 * @method string getResumeTime()
 */
class ForbidLiveStream extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setDomainSwitch($domainSwitch)
 * @method string getDomainSwitch()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeUpBpsPeakOfLine extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisodeType($episodeType)
 * @method string getEpisodeType()
 * @method $this setEpisodeName($episodeName)
 * @method string getEpisodeName()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setComponentId($componentId)
 * @method array getComponentId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setSwitchType($switchType)
 * @method string getSwitchType()
 */
class AddCasterEpisode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class CompleteBoard extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DescribeCasterStreamUrl extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class DescribeLiveSnapshotDetectPornConfig extends Request
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
 * @method $this setSourceUrl($sourceUrl)
 * @method string getSourceUrl()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class AddLivePullStreamInfoConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class DeleteRoom extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveRecordNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class DescribeLiveTopDomainsByFlow extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setLiveDomainType($liveDomainType)
 * @method string getLiveDomainType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setDomainSearchType($domainSearchType)
 * @method string getDomainSearchType()
 * @method $this setDomainStatus($domainStatus)
 * @method string getDomainStatus()
 */
class DescribeLiveUserDomains extends Request
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
class BatchDeleteLiveDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setText($text)
 * @method string getText()
 * @method $this setPattern($pattern)
 * @method string getPattern()
 * @method $this setRepeat($repeat)
 * @method int getRepeat()
 * @method $this setDelay($delay)
 * @method int getDelay()
 */
class AddTrancodeSEI extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class StopCasterScene extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DescribeCasterChannels extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveDomainDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DescribeCasterRtcInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class DescribeCasterSceneAudio extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeLiveStreamsBlockList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 */
class EffectCasterVideoResource extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class SendRoomNotification extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DeleteCaster extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 * @method $this setNeedStatusNotify($needStatusNotify)
 * @method bool getNeedStatusNotify()
 * @method $this setOnDemandUrl($onDemandUrl)
 * @method string getOnDemandUrl()
 */
class AddLiveRecordNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class StopLiveIndex extends Request
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
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisode($episode)
 * @method array getEpisode()
 */
class AddCasterProgram extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DescribeCasterVideoResources extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
class DescribeLiveDomainRealTimeHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setSeekOffset($seekOffset)
 * @method int getSeekOffset()
 * @method $this setPlayStatus($playStatus)
 * @method int getPlayStatus()
 */
class SetCasterChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 */
class RealTimeRecordCommand extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeForbidPushStreamRoomList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setLayoutId($layoutId)
 * @method string getLayoutId()
 */
class DeleteCasterLayout extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainTranscodeData extends Request
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
class DescribeLiveStreamOnlineUserNum extends Request
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
 * @method $this setOssObject($ossObject)
 * @method string getOssObject()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setScene($scene)
 * @method array getScene()
 */
class UpdateLiveSnapshotDetectPornConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setCasterName($casterName)
 * @method string getCasterName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class DescribeCasters extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setLiveDomainType($liveDomainType)
 * @method string getLiveDomainType()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setCheckUrl($checkUrl)
 * @method string getCheckUrl()
 * @method $this setScope($scope)
 * @method string getScope()
 * @method $this setTopLevelDomain($topLevelDomain)
 * @method string getTopLevelDomain()
 */
class AddLiveDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setFunctionNames($functionNames)
 * @method string getFunctionNames()
 */
class DescribeLiveDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setContent($content)
 * @method string getContent()
 */
class AddCasterEpisodeGroupContent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveDetectNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setToAppUid($toAppUid)
 * @method string getToAppUid()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setPriority($priority)
 * @method int getPriority()
 */
class SendRoomUserNotification extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveStreamCount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class UpdateLiveDetectNotifyConfig extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveStreamsNotifyUrlConfig extends Request
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
class DescribeLiveRecordConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setRecordState($recordState)
 * @method string getRecordState()
 */
class DescribeRecords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveCertificateList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setPullDomainName($pullDomainName)
 * @method string getPullDomainName()
 * @method $this setPullAppName($pullAppName)
 * @method string getPullAppName()
 * @method $this setPullProtocol($pullProtocol)
 * @method string getPullProtocol()
 * @method $this setPullAuthType($pullAuthType)
 * @method string getPullAuthType()
 * @method $this setPullAuthKey($pullAuthKey)
 * @method string getPullAuthKey()
 */
class SetLiveLazyPullStreamInfoConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveStreamsNotifyUrlConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setLayoutId($layoutId)
 * @method string getLayoutId()
 */
class DescribeCasterLayouts extends Request
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
class BatchSetLiveDomainConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class StartCasterScene extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class EffectCasterUrgent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setFollowEnable($followEnable)
 * @method int getFollowEnable()
 * @method $this setAudioLayer($audioLayer)
 * @method array getAudioLayer()
 * @method $this setMixList($mixList)
 * @method array getMixList()
 */
class UpdateCasterSceneAudio extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setApp($app)
 * @method string getApp()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setHeight($height)
 * @method int getHeight()
 * @method $this setWidth($width)
 * @method int getWidth()
 * @method $this setFPS($fPS)
 * @method int getFPS()
 * @method $this setVideoBitrate($videoBitrate)
 * @method int getVideoBitrate()
 * @method $this setAudioBitrate($audioBitrate)
 * @method int getAudioBitrate()
 * @method $this setGop($gop)
 * @method string getGop()
 * @method $this setProfile($profile)
 * @method int getProfile()
 */
class AddCustomLiveStreamTranscode extends Request
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
 */
class DeleteLivePullStreamInfoConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class StartCaster extends Request
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
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class DescribeLiveStreamSnapshotInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setComponentId($componentId)
 * @method string getComponentId()
 */
class DeleteCasterComponent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setRecordType($recordType)
 * @method string getRecordType()
 */
class DescribeLiveDomainRecordData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class DeleteBoard extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setSSLProtocol($sSLProtocol)
 * @method string getSSLProtocol()
 * @method $this setSSLPub($sSLPub)
 * @method string getSSLPub()
 * @method $this setSSLPri($sSLPri)
 * @method string getSSLPri()
 */
class SetLiveDomainCertificate extends Request
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
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setApp($app)
 * @method string getApp()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class AddLiveStreamTranscode extends Request
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
class DescribeLiveStreamHistoryUserNum extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
class DescribeLiveDomainBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setResourceName($resourceName)
 * @method string getResourceName()
 * @method $this setLocationId($locationId)
 * @method string getLocationId()
 * @method $this setLiveStreamUrl($liveStreamUrl)
 * @method string getLiveStreamUrl()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 * @method $this setVodUrl($vodUrl)
 * @method string getVodUrl()
 * @method $this setBeginOffset($beginOffset)
 * @method int getBeginOffset()
 * @method $this setEndOffset($endOffset)
 * @method int getEndOffset()
 * @method $this setRepeatNum($repeatNum)
 * @method int getRepeatNum()
 * @method $this setPtsCallbackInterval($ptsCallbackInterval)
 * @method int getPtsCallbackInterval()
 */
class AddCasterVideoResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeBoards extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class ForbidPushStream extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveSnapshotDetectPornConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAnchorId($anchorId)
 * @method string getAnchorId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setUseAppTranscode($useAppTranscode)
 * @method bool getUseAppTranscode()
 */
class CreateRoom extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainSnapshotData extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 * @method $this setCallbackEnable($callbackEnable)
 * @method int getCallbackEnable()
 * @method $this setCallbackUri($callbackUri)
 * @method string getCallbackUri()
 * @method $this setCallbackEvents($callbackEvents)
 * @method string getCallbackEvents()
 */
class SetBoardCallback extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DescribeCasterConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveDomainMapping extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterName($casterName)
 * @method string getCasterName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setNormType($normType)
 * @method int getNormType()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPurchaseTime($purchaseTime)
 * @method string getPurchaseTime()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setCasterTemplate($casterTemplate)
 * @method string getCasterTemplate()
 */
class CreateCaster extends Request
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
 */
class DeleteLiveRecordVodConfig extends Request
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
 */
class DescribeLiveRecordVodConfigs extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setLayoutId($layoutId)
 * @method string getLayoutId()
 * @method $this setVideoLayer($videoLayer)
 * @method array getVideoLayer()
 * @method $this setAudioLayer($audioLayer)
 * @method array getAudioLayer()
 * @method $this setBlendList($blendList)
 * @method array getBlendList()
 * @method $this setMixList($mixList)
 * @method array getMixList()
 */
class ModifyCasterLayout extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setFromSceneId($fromSceneId)
 * @method string getFromSceneId()
 * @method $this setToSceneId($toSceneId)
 * @method string getToSceneId()
 */
class CopyCasterSceneConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setVideoLayer($videoLayer)
 * @method array getVideoLayer()
 * @method $this setAudioLayer($audioLayer)
 * @method array getAudioLayer()
 * @method $this setBlendList($blendList)
 * @method array getBlendList()
 * @method $this setMixList($mixList)
 * @method array getMixList()
 */
class AddCasterLayout extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainSwitch($domainSwitch)
 * @method string getDomainSwitch()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeUpBpsPeakData extends Request
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
 * @method $this setRecordFormat($recordFormat)
 * @method array getRecordFormat()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOnDemand($onDemand)
 * @method int getOnDemand()
 */
class AddLiveAppRecordConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCertName($certName)
 * @method string getCertName()
 */
class DescribeLiveCertificateDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisodeId($episodeId)
 * @method string getEpisodeId()
 */
class DeleteCasterEpisode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setType($type)
 * @method string getType()
 */
class DeleteCasterSceneConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 */
class DescribeCasterScenes extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveDetectNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class CreateBoard extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class CompleteBoardRecord extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisodeId($episodeId)
 * @method string getEpisodeId()
 * @method $this setEpisodeName($episodeName)
 * @method string getEpisodeName()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setComponentId($componentId)
 * @method array getComponentId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setSwitchType($switchType)
 * @method string getSwitchType()
 */
class ModifyCasterEpisode extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class DescribeBoardEvents extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setMode($mode)
 * @method int getMode()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class RealTimeSnapshotCommand extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class ApplyBoardToken extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StartLiveDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeRecord extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveRecordNotifyConfig extends Request
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
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setComponentId($componentId)
 * @method string getComponentId()
 */
class DescribeCasterComponents extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setTokenId($tokenId)
 * @method string getTokenId()
 * @method $this setInputUrl($inputUrl)
 * @method string getInputUrl()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setOssBucket($ossBucket)
 * @method string getOssBucket()
 * @method $this setOssEndpoint($ossEndpoint)
 * @method string getOssEndpoint()
 * @method $this setOssUserId($ossUserId)
 * @method string getOssUserId()
 * @method $this setOssRamRole($ossRamRole)
 * @method string getOssRamRole()
 */
class StartLiveIndex extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBoardData($boardData)
 * @method string getBoardData()
 */
class UpdateBoard extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 */
class DescribeLiveStreamsPublishList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class AddLiveDetectNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainSwitch($domainSwitch)
 * @method string getDomainSwitch()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeUpPeakPublishStreamData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setAuthSwitch($authSwitch)
 * @method string getAuthSwitch()
 * @method $this setCallbackEnable($callbackEnable)
 * @method int getCallbackEnable()
 * @method $this setCallbackUri($callbackUri)
 * @method string getCallbackUri()
 * @method $this setCallbackEvents($callbackEvents)
 * @method string getCallbackEvents()
 */
class UpdateBoardCallback extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 */
class SetLiveStreamsNotifyUrlConfig extends Request
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
 * @method $this setVodTranscodeGroupId($vodTranscodeGroupId)
 * @method string getVodTranscodeGroupId()
 * @method $this setCycleDuration($cycleDuration)
 * @method int getCycleDuration()
 * @method $this setAutoCompose($autoCompose)
 * @method string getAutoCompose()
 * @method $this setComposeVodTranscodeGroupId($composeVodTranscodeGroupId)
 * @method string getComposeVodTranscodeGroupId()
 */
class AddLiveRecordVodConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
class DescribeLiveDomainTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainRealTimeTrafficData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setTime($time)
 * @method string getTime()
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setSceneId($sceneId)
 * @method string getSceneId()
 * @method $this setLayoutId($layoutId)
 * @method string getLayoutId()
 * @method $this setComponentId($componentId)
 * @method array getComponentId()
 */
class UpdateCasterSceneConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveLazyPullStreamInfoConfig extends Request
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
 * @method $this setOssObject($ossObject)
 * @method string getOssObject()
 * @method $this setScene($scene)
 * @method array getScene()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class AddLiveSnapshotDetectPornConfig extends Request
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
 */
class DeleteLiveAppRecordConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class StopCaster extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setResourceName($resourceName)
 * @method string getResourceName()
 * @method $this setLiveStreamUrl($liveStreamUrl)
 * @method string getLiveStreamUrl()
 * @method $this setMaterialId($materialId)
 * @method string getMaterialId()
 * @method $this setVodUrl($vodUrl)
 * @method string getVodUrl()
 * @method $this setBeginOffset($beginOffset)
 * @method int getBeginOffset()
 * @method $this setEndOffset($endOffset)
 * @method int getEndOffset()
 * @method $this setRepeatNum($repeatNum)
 * @method int getRepeatNum()
 * @method $this setPtsCallbackInterval($ptsCallbackInterval)
 * @method int getPtsCallbackInterval()
 */
class ModifyCasterVideoResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 */
class DeleteCasterVideoResource extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeRoomKickoutUserList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 */
class DeleteCasterProgram extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAnchorId($anchorId)
 * @method string getAnchorId()
 * @method $this setRoomStatus($roomStatus)
 * @method int getRoomStatus()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeRoomList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setEpisode($episode)
 * @method array getEpisode()
 */
class ModifyCasterProgram extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ApplyRecordToken extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class StopLiveDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class JoinBoard extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DescribeLiveLazyPullStreamConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
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
 * @method $this setCasterName($casterName)
 * @method string getCasterName()
 * @method $this setSrcCasterId($srcCasterId)
 * @method string getSrcCasterId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CopyCaster extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setComponentId($componentId)
 * @method string getComponentId()
 * @method $this setComponentName($componentName)
 * @method string getComponentName()
 * @method $this setComponentType($componentType)
 * @method string getComponentType()
 * @method $this setEffect($effect)
 * @method string getEffect()
 * @method $this setComponentLayer($componentLayer)
 * @method string getComponentLayer()
 * @method $this setTextLayerContent($textLayerContent)
 * @method string getTextLayerContent()
 * @method $this setImageLayerContent($imageLayerContent)
 * @method string getImageLayerContent()
 * @method $this setCaptionLayerContent($captionLayerContent)
 * @method string getCaptionLayerContent()
 */
class ModifyCasterComponent extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class DescribeRoomStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setApp($app)
 * @method string getApp()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class DeleteLiveStreamTranscode extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 * @method $this setOnDemandUrl($onDemandUrl)
 * @method string getOnDemandUrl()
 * @method $this setNeedStatusNotify($needStatusNotify)
 * @method bool getNeedStatusNotify()
 */
class UpdateLiveRecordNotifyConfig extends Request
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
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class DescribeLiveStreamRecordIndexFiles extends Request
{

}