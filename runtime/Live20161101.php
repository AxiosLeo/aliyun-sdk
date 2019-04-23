<?php

namespace aliyun\sdk\services\Live20161101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20161101
 *
 * @package aliyun\sdk\services\Live20161101
 * @method DescribeLiveDomainStreamPublishPlayData DescribeLiveDomainStreamPublishPlayData()
 * @method ForbidRoomChat ForbidRoomChat()
 * @method DescribeLiveDomainRealTimeBpsData DescribeLiveDomainRealTimeBpsData()
 * @method AllowAllSendMessage AllowAllSendMessage()
 * @method AddLiveDomainMapping AddLiveDomainMapping()
 * @method DescribeIlvbRegions DescribeIlvbRegions()
 * @method AllowPushStream AllowPushStream()
 * @method AddLiveMixNotifyConfig AddLiveMixNotifyConfig()
 * @method AddCasterEpisodeGroup AddCasterEpisodeGroup()
 * @method CancelLinkMic CancelLinkMic()
 * @method DescribeLiveMixNotifyConfig DescribeLiveMixNotifyConfig()
 * @method DescribeRoomChatHistory DescribeRoomChatHistory()
 * @method DescribeCasterProgram DescribeCasterProgram()
 * @method DescribeBoardSnapshot DescribeBoardSnapshot()
 * @method DescribeIlvbRecordConfig DescribeIlvbRecordConfig()
 * @method SetCasterConfig SetCasterConfig()
 * @method DescribeLiveStreamsOnlineList DescribeLiveStreamsOnlineList()
 * @method CreateBoardApp CreateBoardApp()
 * @method EditScreenPictures EditScreenPictures()
 * @method DescribeIlvbRecordList DescribeIlvbRecordList()
 * @method DescribeLiveDomainFrameRateAndBitRateData DescribeLiveDomainFrameRateAndBitRateData()
 * @method AddPrivateLineConfig AddPrivateLineConfig()
 * @method AllowSendMessage AllowSendMessage()
 * @method DeleteLiveDomainPlayMapping DeleteLiveDomainPlayMapping()
 * @method CheckSnapshotStatus CheckSnapshotStatus()
 * @method AddCasterComponent AddCasterComponent()
 * @method StartBoardRecord StartBoardRecord()
 * @method SetCasterSceneConfig SetCasterSceneConfig()
 * @method DescribeLiveShiftStatus DescribeLiveShiftStatus()
 * @method SetLiveEditorScene SetLiveEditorScene()
 * @method DescribeLiveDomainHitRateData DescribeLiveDomainHitRateData()
 * @method DeleteCasterEpisodeGroup DeleteCasterEpisodeGroup()
 * @method DescribeLiveEditorTranscodeTemplates DescribeLiveEditorTranscodeTemplates()
 * @method DeleteLiveEditConfig DeleteLiveEditConfig()
 * @method ForbidLiveStream ForbidLiveStream()
 * @method UpdateAppCallbackConfig UpdateAppCallbackConfig()
 * @method EnableDefaultIlvbTranscodeConfig EnableDefaultIlvbTranscodeConfig()
 * @method DescribeUserUsageDetailDataExportTask DescribeUserUsageDetailDataExportTask()
 * @method DescribeUpBpsPeakOfLine DescribeUpBpsPeakOfLine()
 * @method UpMic UpMic()
 * @method AddCasterEpisode AddCasterEpisode()
 * @method SetLiveShiftVision SetLiveShiftVision()
 * @method DescribePrivateLineConfigs DescribePrivateLineConfigs()
 * @method CompleteBoard CompleteBoard()
 * @method SetLiveShiftAuth SetLiveShiftAuth()
 * @method DescribeCasterStreamUrl DescribeCasterStreamUrl()
 * @method StartStreamIntercut StartStreamIntercut()
 * @method DescribeLiveDomainOriginTrafficData DescribeLiveDomainOriginTrafficData()
 * @method DescribeLiveSnapshotDetectPornConfig DescribeLiveSnapshotDetectPornConfig()
 * @method DescribeLiveStreamAppStreams DescribeLiveStreamAppStreams()
 * @method AddLivePullStreamInfoConfig AddLivePullStreamInfoConfig()
 * @method DeleteRoom DeleteRoom()
 * @method DescribeLiveRecordNotifyConfig DescribeLiveRecordNotifyConfig()
 * @method DescribeLiveTopDomainsByFlow DescribeLiveTopDomainsByFlow()
 * @method DescribeLiveUserDomains DescribeLiveUserDomains()
 * @method AddLiveDomainPlayMapping AddLiveDomainPlayMapping()
 * @method AddLiveEditConfig AddLiveEditConfig()
 * @method BatchDeleteLiveDomainConfigs BatchDeleteLiveDomainConfigs()
 * @method SendRoomChat SendRoomChat()
 * @method AddTrancodeSEI AddTrancodeSEI()
 * @method DeleteLiveEditorConfig DeleteLiveEditorConfig()
 * @method StopCasterScene StopCasterScene()
 * @method DescribeCasterChannels DescribeCasterChannels()
 * @method DescribeLiveDomainDetail DescribeLiveDomainDetail()
 * @method CreateCasterScene CreateCasterScene()
 * @method DescribeApps DescribeApps()
 * @method DeleteLiveMixConfig DeleteLiveMixConfig()
 * @method DescribePushInfo DescribePushInfo()
 * @method RequestLinkMic RequestLinkMic()
 * @method DescribeCasterRtcInfo DescribeCasterRtcInfo()
 * @method StartIlvbRealTimeRecord StartIlvbRealTimeRecord()
 * @method DescribeCasterSceneAudio DescribeCasterSceneAudio()
 * @method AddLiveEditorNotifyConfig AddLiveEditorNotifyConfig()
 * @method ForbidSendMessage ForbidSendMessage()
 * @method DescribeLiveStreamsBlockList DescribeLiveStreamsBlockList()
 * @method EffectCasterVideoResource EffectCasterVideoResource()
 * @method CreateLiveStreamRecordIndexFiles CreateLiveStreamRecordIndexFiles()
 * @method CreateApp CreateApp()
 * @method EnterRoom EnterRoom()
 * @method SendRoomNotification SendRoomNotification()
 * @method DeleteCaster DeleteCaster()
 * @method DescribeAppCallbackConfig DescribeAppCallbackConfig()
 * @method DescribeClientList DescribeClientList()
 * @method DescribeLiveStreamPublishPlayData DescribeLiveStreamPublishPlayData()
 * @method AddLiveRecordNotifyConfig AddLiveRecordNotifyConfig()
 * @method DescribeTranscodeLog DescribeTranscodeLog()
 * @method StopLiveIndex StopLiveIndex()
 * @method DescribeLiveStreamsControlHistory DescribeLiveStreamsControlHistory()
 * @method AddCasterProgram AddCasterProgram()
 * @method DescribeCasterVideoResources DescribeCasterVideoResources()
 * @method DescribeLiveDomainRealTimeHttpCodeData DescribeLiveDomainRealTimeHttpCodeData()
 * @method SetCasterChannel SetCasterChannel()
 * @method DescribeLiveStreamRealTimeBpsData DescribeLiveStreamRealTimeBpsData()
 * @method RealTimeRecordCommand RealTimeRecordCommand()
 * @method DescribeForbidPushStreamRoomList DescribeForbidPushStreamRoomList()
 * @method DeleteCasterLayout DeleteCasterLayout()
 * @method DescribeLiveDomainTranscodeData DescribeLiveDomainTranscodeData()
 * @method DescribeLikeInfo DescribeLikeInfo()
 * @method DescribeLiveStreamOnlineUserNum DescribeLiveStreamOnlineUserNum()
 * @method OpenLiveShift OpenLiveShift()
 * @method DescribeRoomTokenId DescribeRoomTokenId()
 * @method UpdateLivePullStreamInfoConfig UpdateLivePullStreamInfoConfig()
 * @method UpdateLiveSnapshotDetectPornConfig UpdateLiveSnapshotDetectPornConfig()
 * @method DescribeCasters DescribeCasters()
 * @method AddLiveDomain AddLiveDomain()
 * @method DescribeLiveDomainConfigs DescribeLiveDomainConfigs()
 * @method DescribeLiveStreamBlackList DescribeLiveStreamBlackList()
 * @method UpdateLiveMixNotifyConfig UpdateLiveMixNotifyConfig()
 * @method UnlinkMic UnlinkMic()
 * @method DeleteApp DeleteApp()
 * @method AddCasterEpisodeGroupContent AddCasterEpisodeGroupContent()
 * @method ModifyApp ModifyApp()
 * @method DescribeLiveTranscodeLog DescribeLiveTranscodeLog()
 * @method DescribeLiveUserQuota DescribeLiveUserQuota()
 * @method KickoutLinkMic KickoutLinkMic()
 * @method AddLiveEditorConfig AddLiveEditorConfig()
 * @method DescribeLiveDomainCname DescribeLiveDomainCname()
 * @method DescribeLiveEditorNotifyConfig DescribeLiveEditorNotifyConfig()
 * @method DeleteLiveDetectNotifyConfig DeleteLiveDetectNotifyConfig()
 * @method UpdateLiveEditNotifyConfig UpdateLiveEditNotifyConfig()
 * @method DescribeLiveDomainMax95BpsData DescribeLiveDomainMax95BpsData()
 * @method UnkickoutLinkMic UnkickoutLinkMic()
 * @method SendRoomUserNotification SendRoomUserNotification()
 * @method DescribeLiveStreamCount DescribeLiveStreamCount()
 * @method UpdateLiveDetectNotifyConfig UpdateLiveDetectNotifyConfig()
 * @method DescribeLiveDomainPvUvData DescribeLiveDomainPvUvData()
 * @method StopMixStreamsService StopMixStreamsService()
 * @method DescribeLiveStreamTranscodeInfo DescribeLiveStreamTranscodeInfo()
 * @method DescribeRoomMessages DescribeRoomMessages()
 * @method OpenLiveService OpenLiveService()
 * @method DeleteLiveDomain DeleteLiveDomain()
 * @method CreateUsageDetailDataExportTask CreateUsageDetailDataExportTask()
 * @method DescribeLiveStreamsNotifyUrlConfig DescribeLiveStreamsNotifyUrlConfig()
 * @method DescribeLiveDomainOriginBpsData DescribeLiveDomainOriginBpsData()
 * @method DescribeLiveRecordConfig DescribeLiveRecordConfig()
 * @method AcceptLinkMic AcceptLinkMic()
 * @method StopStreamIntercut StopStreamIntercut()
 * @method DescribeRecords DescribeRecords()
 * @method DescribeLiveCertificateList DescribeLiveCertificateList()
 * @method SetLiveLazyPullStreamInfoConfig SetLiveLazyPullStreamInfoConfig()
 * @method DeleteLiveStreamsNotifyUrlConfig DeleteLiveStreamsNotifyUrlConfig()
 * @method RejectLinkMic RejectLinkMic()
 * @method DeleteLiveMixNotifyConfig DeleteLiveMixNotifyConfig()
 * @method DescribeLiveLocations DescribeLiveLocations()
 * @method ApplyToken ApplyToken()
 * @method DescribeLiveRegions DescribeLiveRegions()
 * @method StartMultipleStreamMixService StartMultipleStreamMixService()
 * @method Like Like()
 * @method PayOrderCallback PayOrderCallback()
 * @method DownMic DownMic()
 * @method DescribeCasterLayouts DescribeCasterLayouts()
 * @method DescribeLiveUpVideoAudioInfo DescribeLiveUpVideoAudioInfo()
 * @method CreateSubscriber CreateSubscriber()
 * @method BatchSetLiveDomainConfigs BatchSetLiveDomainConfigs()
 * @method ForbidAllSendMessage ForbidAllSendMessage()
 * @method StartCasterScene StartCasterScene()
 * @method EffectCasterUrgent EffectCasterUrgent()
 * @method UpdateCasterSceneAudio UpdateCasterSceneAudio()
 * @method AddCustomLiveStreamTranscode AddCustomLiveStreamTranscode()
 * @method DeleteLivePullStreamInfoConfig DeleteLivePullStreamInfoConfig()
 * @method StartCaster StartCaster()
 * @method AddMultipleStreamMixService AddMultipleStreamMixService()
 * @method DescribeLiveStreamSnapshotInfo DescribeLiveStreamSnapshotInfo()
 * @method RemoveMultipleStreamMixService RemoveMultipleStreamMixService()
 * @method DeleteCasterComponent DeleteCasterComponent()
 * @method SetLiveStreamDelayConfig SetLiveStreamDelayConfig()
 * @method DescribeLiveAudit DescribeLiveAudit()
 * @method StartMixStreamsService StartMixStreamsService()
 * @method DescribeLiveDomainRecordData DescribeLiveDomainRecordData()
 * @method DeletePrivateLineConfig DeletePrivateLineConfig()
 * @method DescribeLiveStreamUniversalAppStreams DescribeLiveStreamUniversalAppStreams()
 * @method ModifyLiveEditorLayout ModifyLiveEditorLayout()
 * @method DeleteBoard DeleteBoard()
 * @method SetLiveDomainCertificate SetLiveDomainCertificate()
 * @method DescribeLiveDetectResultDetail DescribeLiveDetectResultDetail()
 * @method DeleteIlvbTranscodeConfig DeleteIlvbTranscodeConfig()
 * @method DescribeLivePullStreamConfig DescribeLivePullStreamConfig()
 * @method DescribeLiveStreamRecordContent DescribeLiveStreamRecordContent()
 * @method DescribeLiveDomainLog DescribeLiveDomainLog()
 * @method AddLiveStreamTranscode AddLiveStreamTranscode()
 * @method UpdateLiveEditorNotifyConfig UpdateLiveEditorNotifyConfig()
 * @method DescribeLiveStreamHistoryUserNum DescribeLiveStreamHistoryUserNum()
 * @method ResumeLiveStream ResumeLiveStream()
 * @method UpdateLiveAppSnapshotConfig UpdateLiveAppSnapshotConfig()
 * @method DeleteLiveDomainMapping DeleteLiveDomainMapping()
 * @method DescribeLiveDomainBpsData DescribeLiveDomainBpsData()
 * @method AddCasterVideoResource AddCasterVideoResource()
 * @method DescribeBoards DescribeBoards()
 * @method ForbidPushStream ForbidPushStream()
 * @method AddLiveMixConfig AddLiveMixConfig()
 * @method UnSubscribeStream UnSubscribeStream()
 * @method DescribeLiveDetectResultDigest DescribeLiveDetectResultDigest()
 * @method StopLiveEditor StopLiveEditor()
 * @method DescribeLiveSpecificDomainMapping DescribeLiveSpecificDomainMapping()
 * @method DescribeRoomInfo DescribeRoomInfo()
 * @method DeleteLiveAppSnapshotConfig DeleteLiveAppSnapshotConfig()
 * @method DeleteLiveSnapshotDetectPornConfig DeleteLiveSnapshotDetectPornConfig()
 * @method CreateRoom CreateRoom()
 * @method DescribeLiveDomainSnapshotData DescribeLiveDomainSnapshotData()
 * @method DescribeLiveDiamondValue DescribeLiveDiamondValue()
 * @method OrderModifySucceededCallback OrderModifySucceededCallback()
 * @method ImageDetection ImageDetection()
 * @method AddLiveAppSnapshotConfig AddLiveAppSnapshotConfig()
 * @method DescribeClientCount DescribeClientCount()
 * @method SetBoardCallback SetBoardCallback()
 * @method DescribeCasterConfig DescribeCasterConfig()
 * @method UpdateIlvbTranscodeConfig UpdateIlvbTranscodeConfig()
 * @method DescribeLiveDomainMapping DescribeLiveDomainMapping()
 * @method DescribeLiveDomains DescribeLiveDomains()
 * @method DisableDefaultIlvbTranscodeConfig DisableDefaultIlvbTranscodeConfig()
 * @method CreateCaster CreateCaster()
 * @method ModifyLiveService ModifyLiveService()
 * @method DescribeIlvbTranscodeConfigList DescribeIlvbTranscodeConfigList()
 * @method DeleteLiveRecordVodConfig DeleteLiveRecordVodConfig()
 * @method DescribeLiveRecordVodConfigs DescribeLiveRecordVodConfigs()
 * @method DeleteLiveEditorCanvas DeleteLiveEditorCanvas()
 * @method ModifyCasterLayout ModifyCasterLayout()
 * @method CopyCasterSceneConfig CopyCasterSceneConfig()
 * @method AddCasterLayout AddCasterLayout()
 * @method DescribeUpBpsPeakData DescribeUpBpsPeakData()
 * @method JoinRoom JoinRoom()
 * @method DescribeForbidRoomChatList DescribeForbidRoomChatList()
 * @method AddLiveAppRecordConfig AddLiveAppRecordConfig()
 * @method DescribeDomainUsageData DescribeDomainUsageData()
 * @method EditScreenTexts EditScreenTexts()
 * @method DescribeLiveCertificateDetail DescribeLiveCertificateDetail()
 * @method DeleteCasterEpisode DeleteCasterEpisode()
 * @method StartLiveEditor StartLiveEditor()
 * @method DescribeUserLiveStatus DescribeUserLiveStatus()
 * @method DeleteCasterSceneConfig DeleteCasterSceneConfig()
 * @method DescribeCasterScenes DescribeCasterScenes()
 * @method DescribeLiveDomainQpsData DescribeLiveDomainQpsData()
 * @method UpdateIlvbRecordConfig UpdateIlvbRecordConfig()
 * @method DescribeLiveDetectNotifyConfig DescribeLiveDetectNotifyConfig()
 * @method DeleteLiveEditorNotifyConfig DeleteLiveEditorNotifyConfig()
 * @method AddIlvbRecordConfig AddIlvbRecordConfig()
 * @method StopIlvbRealTimeRecord StopIlvbRealTimeRecord()
 * @method DescribeLinkMicInfo DescribeLinkMicInfo()
 * @method QuitRoom QuitRoom()
 * @method LeaveRoom LeaveRoom()
 * @method CreateBoard CreateBoard()
 * @method CompleteBoardRecord CompleteBoardRecord()
 * @method ModifyCasterEpisode ModifyCasterEpisode()
 * @method BatchStartLiveDomain BatchStartLiveDomain()
 * @method DescribeLiveStreamRecordIndexFile DescribeLiveStreamRecordIndexFile()
 * @method DescribeBoardEvents DescribeBoardEvents()
 * @method RealTimeSnapshotCommand RealTimeSnapshotCommand()
 * @method DescribeLiveStreamData DescribeLiveStreamData()
 * @method OrderSucceededCallback OrderSucceededCallback()
 * @method ApplyBoardToken ApplyBoardToken()
 * @method StartLiveDomain StartLiveDomain()
 * @method DescribeRecord DescribeRecord()
 * @method DeleteLiveRecordNotifyConfig DeleteLiveRecordNotifyConfig()
 * @method DeleteLiveEditNotifyConfig DeleteLiveEditNotifyConfig()
 * @method AddLiveEditorCanvas AddLiveEditorCanvas()
 * @method DescribeLiveStreamBitRateData DescribeLiveStreamBitRateData()
 * @method UpdateLiveEditorCanvas UpdateLiveEditorCanvas()
 * @method LiveDetectFeedback LiveDetectFeedback()
 * @method DescribeCasterComponents DescribeCasterComponents()
 * @method DescribeLiveStreamsFrameRateAndBitRateData DescribeLiveStreamsFrameRateAndBitRateData()
 * @method StartLiveIndex StartLiveIndex()
 * @method DescribePrivateLineArea DescribePrivateLineArea()
 * @method DescribeUserBillingInfo DescribeUserBillingInfo()
 * @method DescribeLiveRoomPublishPlayData DescribeLiveRoomPublishPlayData()
 * @method AllowRoomChat AllowRoomChat()
 * @method DeleteCasterScene DeleteCasterScene()
 * @method UpdateBoard UpdateBoard()
 * @method DescribeLiveStreamsPublishList DescribeLiveStreamsPublishList()
 * @method AddLiveDetectNotifyConfig AddLiveDetectNotifyConfig()
 * @method DescribeUpPeakPublishStreamData DescribeUpPeakPublishStreamData()
 * @method UpdateBoardCallback UpdateBoardCallback()
 * @method SetUserDomainAuthClose SetUserDomainAuthClose()
 * @method DescribeLiveBlackListAppStreams DescribeLiveBlackListAppStreams()
 * @method SetLiveStreamsNotifyUrlConfig SetLiveStreamsNotifyUrlConfig()
 * @method AddLiveRecordVodConfig AddLiveRecordVodConfig()
 * @method RelieveKickout RelieveKickout()
 * @method DescribeLiveDomainTrafficData DescribeLiveDomainTrafficData()
 * @method DescribeLiveDomainRealTimeTrafficData DescribeLiveDomainRealTimeTrafficData()
 * @method DescribeHlsLiveStreamRealTimeBpsData DescribeHlsLiveStreamRealTimeBpsData()
 * @method UpdateCasterSceneConfig UpdateCasterSceneConfig()
 * @method DeleteIlvbRecordConfig DeleteIlvbRecordConfig()
 * @method DeleteLiveLazyPullStreamInfoConfig DeleteLiveLazyPullStreamInfoConfig()
 * @method AddLiveSnapshotDetectPornConfig AddLiveSnapshotDetectPornConfig()
 * @method DeleteLiveAppRecordConfig DeleteLiveAppRecordConfig()
 * @method DeleteLiveSpecificConfig DeleteLiveSpecificConfig()
 * @method BatchStopLiveDomain BatchStopLiveDomain()
 * @method DescribeLiveMixConfig DescribeLiveMixConfig()
 * @method DescribeLiveDomainOnlineUserNum DescribeLiveDomainOnlineUserNum()
 * @method StopCaster StopCaster()
 * @method ModifyCasterVideoResource ModifyCasterVideoResource()
 * @method StopMultipleStreamMixService StopMultipleStreamMixService()
 * @method DeleteCasterVideoResource DeleteCasterVideoResource()
 * @method DescribeLiveEditorConfig DescribeLiveEditorConfig()
 * @method DescribeRoomKickoutUserList DescribeRoomKickoutUserList()
 * @method DeleteCasterProgram DeleteCasterProgram()
 * @method ImagePornDetection ImagePornDetection()
 * @method DescribeRoomList DescribeRoomList()
 * @method AddAppCallbackConfig AddAppCallbackConfig()
 * @method KickOut KickOut()
 * @method DescribeLiveDomainHttpCodeData DescribeLiveDomainHttpCodeData()
 * @method DescribeLiveStreamDelayConfig DescribeLiveStreamDelayConfig()
 * @method ModifyCasterProgram ModifyCasterProgram()
 * @method ApplyRecordToken ApplyRecordToken()
 * @method StopLiveDomain StopLiveDomain()
 * @method DescribePlayInfo DescribePlayInfo()
 * @method AddLiveEditNotifyConfig AddLiveEditNotifyConfig()
 * @method DescribeLiveResourcePackage DescribeLiveResourcePackage()
 * @method DescribeLiveStreamsPublishAndOnlineData DescribeLiveStreamsPublishAndOnlineData()
 * @method DescribeLiveEditNotifyConfig DescribeLiveEditNotifyConfig()
 * @method JoinBoard JoinBoard()
 * @method DescribeLiveLazyPullStreamConfig DescribeLiveLazyPullStreamConfig()
 * @method DescribeLiveService DescribeLiveService()
 * @method UpdateLiveDomain UpdateLiveDomain()
 * @method DescribeLiveSnapshotConfig DescribeLiveSnapshotConfig()
 * @method DescribeLiveStreamCheatData DescribeLiveStreamCheatData()
 * @method CopyCaster CopyCaster()
 * @method DescribeLiveDomainRegionData DescribeLiveDomainRegionData()
 * @method LinkMic LinkMic()
 * @method DescribeSubscribeList DescribeSubscribeList()
 * @method ModifyCasterComponent ModifyCasterComponent()
 * @method DescribeLiveEditConfig DescribeLiveEditConfig()
 * @method AddIlvbTranscodeConfig AddIlvbTranscodeConfig()
 * @method DescribeRoomStatus DescribeRoomStatus()
 * @method DeleteLiveStreamTranscode DeleteLiveStreamTranscode()
 * @method UpdateLiveRecordNotifyConfig UpdateLiveRecordNotifyConfig()
 * @method DescribeBlackListByStreamName DescribeBlackListByStreamName()
 * @method UpdateRoomIlvbTranscodeConfig UpdateRoomIlvbTranscodeConfig()
 * @method DescribeLiveStreamRecordIndexFiles DescribeLiveStreamRecordIndexFiles()
 * @method SubscribeStream SubscribeStream()
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
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeLiveDomainStreamPublishPlayData extends Request
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
 * @method $this setForbidAppUid($forbidAppUid)
 * @method string getForbidAppUid()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class ForbidRoomChat extends Request
{

}/**
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class AllowAllSendMessage extends Request
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
 */
class DescribeIlvbRegions extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class AddLiveMixNotifyConfig extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setCancelRequestId($cancelRequestId)
 * @method string getCancelRequestId()
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class CancelLinkMic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveMixNotifyConfig extends Request
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
class DescribeRoomChatHistory extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DescribeIlvbRecordConfig extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class CreateBoardApp extends Request
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
 * @method $this setPicture($picture)
 * @method array getPicture()
 */
class EditScreenPictures extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeIlvbRecordList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 */
class DescribeLiveDomainFrameRateAndBitRateData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setGroup($group)
 * @method int getGroup()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setFlag($flag)
 * @method string getFlag()
 */
class AddPrivateLineConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class AllowSendMessage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPlayDomain($playDomain)
 * @method string getPlayDomain()
 * @method $this setPullDomain($pullDomain)
 * @method string getPullDomain()
 */
class DeleteLiveDomainPlayMapping extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class CheckSnapshotStatus extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DescribeLiveShiftStatus extends Request
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
 * @method $this setLayoutConfig($layoutConfig)
 * @method string getLayoutConfig()
 * @method $this setClearSideOutput($clearSideOutput)
 * @method int getClearSideOutput()
 */
class SetLiveEditorScene extends Request
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
class DescribeLiveDomainHitRateData extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DescribeLiveEditorTranscodeTemplates extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveEditConfig extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEnable($enable)
 * @method int getEnable()
 * @method $this setCallbackMode($callbackMode)
 * @method int getCallbackMode()
 * @method $this setCallbackUri($callbackUri)
 * @method string getCallbackUri()
 * @method $this setAuthSwitch($authSwitch)
 * @method int getAuthSwitch()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setEventTypes($eventTypes)
 * @method string getEventTypes()
 */
class UpdateAppCallbackConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class EnableDefaultIlvbTranscodeConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class UpMic extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setMethodName($methodName)
 * @method string getMethodName()
 * @method $this setVision($vision)
 * @method int getVision()
 */
class SetLiveShiftVision extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setFlag($flag)
 * @method string getFlag()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePrivateLineConfigs extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class SetLiveShiftAuth extends Request
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
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setSourceUrl($sourceUrl)
 * @method string getSourceUrl()
 */
class StartStreamIntercut extends Request
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
class DescribeLiveDomainOriginTrafficData extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setField($field)
 * @method string getField()
 * @method $this setOnline($online)
 * @method string getOnline()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeLiveStreamAppStreams extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPlayDomain($playDomain)
 * @method string getPlayDomain()
 * @method $this setPullDomain($pullDomain)
 * @method string getPullDomain()
 */
class AddLiveDomainPlayMapping extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class AddLiveEditConfig extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class SendRoomChat extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveEditorConfig extends Request
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
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setSceneName($sceneName)
 * @method string getSceneName()
 * @method $this setOutputType($outputType)
 * @method int getOutputType()
 */
class CreateCasterScene extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setOrder($order)
 * @method string getOrder()
 */
class DescribeApps extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class DeleteLiveMixConfig extends Request
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
 */
class DescribePushInfo extends Request
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
 * @method $this setAppRequestId($appRequestId)
 * @method string getAppRequestId()
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class RequestLinkMic extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class StartIlvbRealTimeRecord extends Request
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
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class AddLiveEditorNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 */
class ForbidSendMessage extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPlayDomain($playDomain)
 * @method string getPlayDomain()
 * @method $this setPushDomain($pushDomain)
 * @method string getPushDomain()
 * @method $this setRtcAppId($rtcAppId)
 * @method string getRtcAppId()
 * @method $this setDefaultTranscode($defaultTranscode)
 * @method bool getDefaultTranscode()
 */
class CreateApp extends Request
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
 * @method $this setUserRole($userRole)
 * @method string getUserRole()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 */
class EnterRoom extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DescribeAppCallbackConfig extends Request
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
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeClientList extends Request
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
 */
class DescribeLiveStreamPublishPlayData extends Request
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
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeTranscodeLog extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 * @method $this setLowDelay($lowDelay)
 * @method string getLowDelay()
 * @method $this setAlignQueryTime($alignQueryTime)
 * @method string getAlignQueryTime()
 */
class DescribeLiveStreamRealTimeBpsData extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class DescribeLikeInfo extends Request
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
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setVision($vision)
 * @method int getVision()
 */
class OpenLiveShift extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class DescribeRoomTokenId extends Request
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
 * @method $this setSourceUrl($sourceUrl)
 * @method string getSourceUrl()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class UpdateLivePullStreamInfoConfig extends Request
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
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 */
class DescribeLiveStreamBlackList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class UpdateLiveMixNotifyConfig extends Request
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
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class UnlinkMic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteApp extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setPushDomain($pushDomain)
 * @method string getPushDomain()
 * @method $this setPlayDomain($playDomain)
 * @method string getPlayDomain()
 * @method $this setRtcAppId($rtcAppId)
 * @method string getRtcAppId()
 * @method $this setDefaultTranscode($defaultTranscode)
 * @method bool getDefaultTranscode()
 */
class ModifyApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
class DescribeLiveTranscodeLog extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeLiveUserQuota extends Request
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
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class KickoutLinkMic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class AddLiveEditorConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveDomainCname extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveEditorNotifyConfig extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class UpdateLiveEditNotifyConfig extends Request
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
class DescribeLiveDomainMax95BpsData extends Request
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
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class UnkickoutLinkMic extends Request
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
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainPvUvData extends Request
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
class DescribeRoomMessages extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setInternetChargeType($internetChargeType)
 * @method string getInternetChargeType()
 */
class OpenLiveService extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 */
class CreateUsageDetailDataExportTask extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeLiveDomainOriginBpsData extends Request
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
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setAppRequestId($appRequestId)
 * @method string getAppRequestId()
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class AcceptLinkMic extends Request
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
class StopStreamIntercut extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setAppRequestId($appRequestId)
 * @method string getAppRequestId()
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class RejectLinkMic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveMixNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setBusinessLocationType($businessLocationType)
 * @method string getBusinessLocationType()
 * @method $this setNames($names)
 * @method string getNames()
 * @method $this setFilterOr($filterOr)
 * @method string getFilterOr()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setPhysicalLocationStatus($physicalLocationStatus)
 * @method string getPhysicalLocationStatus()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setFilters($filters)
 * @method string getFilters()
 * @method $this setDepth($depth)
 * @method int getDepth()
 */
class DescribeLiveLocations extends Request
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
 */
class ApplyToken extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeLiveRegions extends Request
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
 * @method $this setMixTemplate($mixTemplate)
 * @method string getMixTemplate()
 */
class StartMultipleStreamMixService extends Request
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
 * @method $this setCount($count)
 * @method int getCount()
 */
class Like extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setdata($data)
 * @method string getdata()
 */
class PayOrderCallback extends Request
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
 */
class DownMic extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStream($stream)
 * @method string getStream()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveUpVideoAudioInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSubscriberName($subscriberName)
 * @method string getSubscriberName()
 */
class CreateSubscriber extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 */
class ForbidAllSendMessage extends Request
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
 * @method $this setMixDomainName($mixDomainName)
 * @method string getMixDomainName()
 * @method $this setMixAppName($mixAppName)
 * @method string getMixAppName()
 * @method $this setMixStreamName($mixStreamName)
 * @method string getMixStreamName()
 */
class AddMultipleStreamMixService extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setMixDomainName($mixDomainName)
 * @method string getMixDomainName()
 * @method $this setMixAppName($mixAppName)
 * @method string getMixAppName()
 * @method $this setMixStreamName($mixStreamName)
 * @method string getMixStreamName()
 */
class RemoveMultipleStreamMixService extends Request
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
 * @method $this setHlsDelay($hlsDelay)
 * @method int getHlsDelay()
 * @method $this setHlsLevel($hlsLevel)
 * @method string getHlsLevel()
 * @method $this setFlvDelay($flvDelay)
 * @method int getFlvDelay()
 * @method $this setFlvLevel($flvLevel)
 * @method string getFlvLevel()
 * @method $this setRtmpDelay($rtmpDelay)
 * @method int getRtmpDelay()
 * @method $this setRtmpLevel($rtmpLevel)
 * @method string getRtmpLevel()
 */
class SetLiveStreamDelayConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setScenes($scenes)
 * @method array getScenes()
 * @method $this setTasks($tasks)
 * @method array getTasks()
 */
class DescribeLiveAudit extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setFlag($flag)
 * @method string getFlag()
 */
class DeletePrivateLineConfig extends Request
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
 * @method $this setField($field)
 * @method string getField()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setStreamType($streamType)
 * @method string getStreamType()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeLiveStreamUniversalAppStreams extends Request
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
 * @method $this setLayoutConfig($layoutConfig)
 * @method string getLayoutConfig()
 */
class ModifyLiveEditorLayout extends Request
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setScene($scene)
 * @method string getScene()
 * @method $this setRate($rate)
 * @method array getRate()
 * @method $this setLabel($label)
 * @method array getLabel()
 * @method $this setSuggestion($suggestion)
 * @method array getSuggestion()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeLiveDetectResultDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteIlvbTranscodeConfig extends Request
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
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainLog extends Request
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
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class UpdateLiveEditorNotifyConfig extends Request
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
 * @method $this setTemplate($template)
 * @method string getTemplate()
 */
class AddLiveMixConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSubscriberId($subscriberId)
 * @method string getSubscriberId()
 * @method $this setStreamId($streamId)
 * @method string getStreamId()
 */
class UnSubscribeStream extends Request
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
 * @method $this setScene($scene)
 * @method string getScene()
 * @method $this setLabel($label)
 * @method array getLabel()
 * @method $this setSuggestion($suggestion)
 * @method array getSuggestion()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeLiveDetectResultDigest extends Request
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
class StopLiveEditor extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPullDomain($pullDomain)
 * @method string getPullDomain()
 */
class DescribeLiveSpecificDomainMapping extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class DescribeRoomInfo extends Request
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
 * @method $this setDiamondDataId($diamondDataId)
 * @method string getDiamondDataId()
 * @method $this setQueryValueType($queryValueType)
 * @method string getQueryValueType()
 * @method $this setQueryValue($queryValue)
 * @method string getQueryValue()
 */
class DescribeLiveDiamondValue extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setdata($data)
 * @method string getdata()
 */
class OrderModifySucceededCallback extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setSceneList($sceneList)
 * @method string getSceneList()
 */
class ImageDetection extends Request
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
 * @method $this setBoardId($boardId)
 * @method string getBoardId()
 */
class DescribeClientCount extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateDescription($templateDescription)
 * @method string getTemplateDescription()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setHeight($height)
 * @method int getHeight()
 * @method $this setWidth($width)
 * @method int getWidth()
 * @method $this setVideoBitRate($videoBitRate)
 * @method int getVideoBitRate()
 * @method $this setAudioBitRate($audioBitRate)
 * @method int getAudioBitRate()
 * @method $this setFps($fps)
 * @method int getFps()
 * @method $this setGop($gop)
 * @method int getGop()
 * @method $this setDefaultUseTemplate($defaultUseTemplate)
 * @method bool getDefaultUseTemplate()
 */
class UpdateIlvbTranscodeConfig extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeLiveDomains extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DisableDefaultIlvbTranscodeConfig extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInternetChargeType($internetChargeType)
 * @method int getInternetChargeType()
 */
class ModifyLiveService extends Request
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
class DescribeIlvbTranscodeConfigList extends Request
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
 * @method $this setCanvasId($canvasId)
 * @method string getCanvasId()
 */
class DeleteLiveEditorCanvas extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setAppOptionInfo($appOptionInfo)
 * @method string getAppOptionInfo()
 * @method $this setUserRole($userRole)
 * @method int getUserRole()
 */
class JoinRoom extends Request
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
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeForbidRoomChatList extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setText($text)
 * @method array getText()
 */
class EditScreenTexts extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 * @method $this setTranscodeTemplate($transcodeTemplate)
 * @method string getTranscodeTemplate()
 * @method $this setSidePushUrl($sidePushUrl)
 * @method string getSidePushUrl()
 * @method $this setSideDelay($sideDelay)
 * @method Float getSideDelay()
 * @method $this setSecondaryStreamName($secondaryStreamName)
 * @method string getSecondaryStreamName()
 * @method $this setSecondaryTranscodeTemplate($secondaryTranscodeTemplate)
 * @method string getSecondaryTranscodeTemplate()
 */
class StartLiveEditor extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserLiveStatus extends Request
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
 * @method $this setIspNameEn($ispNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($locationNameEn)
 * @method string getLocationNameEn()
 */
class DescribeLiveDomainQpsData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setVodTranscodeGroupId($vodTranscodeGroupId)
 * @method string getVodTranscodeGroupId()
 * @method $this setOnDemand($onDemand)
 * @method int getOnDemand()
 */
class UpdateIlvbRecordConfig extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DeleteLiveEditorNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setVodTranscodeGroupId($vodTranscodeGroupId)
 * @method string getVodTranscodeGroupId()
 * @method $this setOnDemand($onDemand)
 * @method int getOnDemand()
 */
class AddIlvbRecordConfig extends Request
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
 */
class StopIlvbRealTimeRecord extends Request
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
 */
class DescribeLinkMicInfo extends Request
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
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 */
class QuitRoom extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 */
class LeaveRoom extends Request
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
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStartLiveDomain extends Request
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStreamPath($streamPath)
 * @method string getStreamPath()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveStreamData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setdata($data)
 * @method string getdata()
 */
class OrderSucceededCallback extends Request
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
 */
class DeleteLiveEditNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCanvasId($canvasId)
 * @method string getCanvasId()
 * @method $this setCanvasConfig($canvasConfig)
 * @method string getCanvasConfig()
 * @method $this setCanvasWidth($canvasWidth)
 * @method int getCanvasWidth()
 * @method $this setCanvasHeight($canvasHeight)
 * @method int getCanvasHeight()
 */
class AddLiveEditorCanvas extends Request
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
 * @method $this setCanvasId($canvasId)
 * @method string getCanvasId()
 * @method $this setCanvasConfig($canvasConfig)
 * @method string getCanvasConfig()
 */
class UpdateLiveEditorCanvas extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setTaskID($taskID)
 * @method string getTaskID()
 * @method $this setDataID($dataID)
 * @method string getDataID()
 * @method $this setURL($uRL)
 * @method string getURL()
 * @method $this setLabel($label)
 * @method string getLabel()
 * @method $this setNote($note)
 * @method string getNote()
 */
class LiveDetectFeedback extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePrivateLineArea extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeUserBillingInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setRoom($room)
 * @method string getRoom()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveRoomPublishPlayData extends Request
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
 * @method $this setForbidAppUid($forbidAppUid)
 * @method string getForbidAppUid()
 */
class AllowRoomChat extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setCasterId($casterId)
 * @method string getCasterId()
 * @method $this setsceneId($sceneId)
 * @method string getsceneId()
 */
class DeleteCasterScene extends Request
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
 */
class SetUserDomainAuthClose extends Request
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
 * @method $this setField($field)
 * @method string getField()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeLiveBlackListAppStreams extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 * @method $this setAppUid($appUid)
 * @method string getAppUid()
 * @method $this setOpAppUid($opAppUid)
 * @method string getOpAppUid()
 */
class RelieveKickout extends Request
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
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteIlvbRecordConfig extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 */
class DeleteLiveSpecificConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainNames($domainNames)
 * @method string getDomainNames()
 */
class BatchStopLiveDomain extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveMixConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 */
class DescribeLiveDomainOnlineUserNum extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setStreamName($streamName)
 * @method string getStreamName()
 */
class StopMultipleStreamMixService extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveEditorConfig extends Request
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
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 */
class ImagePornDetection extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEnable($enable)
 * @method int getEnable()
 * @method $this setCallbackMode($callbackMode)
 * @method int getCallbackMode()
 * @method $this setCallbackUri($callbackUri)
 * @method string getCallbackUri()
 * @method $this setAuthSwitch($authSwitch)
 * @method int getAuthSwitch()
 * @method $this setAuthKey($authKey)
 * @method string getAuthKey()
 * @method $this setEventTypes($eventTypes)
 * @method string getEventTypes()
 */
class AddAppCallbackConfig extends Request
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
 * @method $this setOpAppUid($opAppUid)
 * @method string getOpAppUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class KickOut extends Request
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
class DescribeLiveDomainHttpCodeData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveStreamDelayConfig extends Request
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
 * @method $this setRoomId($roomId)
 * @method string getRoomId()
 */
class DescribePlayInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($notifyUrl)
 * @method string getNotifyUrl()
 */
class AddLiveEditNotifyConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourcePackageNames($resourcePackageNames)
 * @method string getResourcePackageNames()
 */
class DescribeLiveResourcePackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 */
class DescribeLiveStreamsPublishAndOnlineData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveEditNotifyConfig extends Request
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
 */
class DescribeLiveService extends Request
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
 */
class UpdateLiveDomain extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setQueryTime($queryTime)
 * @method string getQueryTime()
 */
class DescribeLiveStreamCheatData extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeLiveDomainRegionData extends Request
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
 * @method $this setAppTargetUid($appTargetUid)
 * @method string getAppTargetUid()
 * @method $this setUserData($userData)
 * @method string getUserData()
 */
class LinkMic extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSubscriberId($subscriberId)
 * @method string getSubscriberId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSubscribeList extends Request
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
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class DescribeLiveEditConfig extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateDescription($templateDescription)
 * @method string getTemplateDescription()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setHeight($height)
 * @method int getHeight()
 * @method $this setWidth($width)
 * @method int getWidth()
 * @method $this setVideoBitRate($videoBitRate)
 * @method int getVideoBitRate()
 * @method $this setAudioBitRate($audioBitRate)
 * @method int getAudioBitRate()
 * @method $this setFps($fps)
 * @method int getFps()
 * @method $this setGop($gop)
 * @method int getGop()
 * @method $this setDefaultUseTemplate($defaultUseTemplate)
 * @method bool getDefaultUseTemplate()
 */
class AddIlvbTranscodeConfig extends Request
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
 */
class DescribeBlackListByStreamName extends Request
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
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setUseDefaultTranscode($useDefaultTranscode)
 * @method bool getUseDefaultTranscode()
 */
class UpdateRoomIlvbTranscodeConfig extends Request
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

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSubscriberId($subscriberId)
 * @method string getSubscriberId()
 * @method $this setStreamId($streamId)
 * @method string getStreamId()
 * @method $this setUserData($userData)
 * @method string getUserData()
 * @method $this setAliUserId($aliUserId)
 * @method string getAliUserId()
 */
class SubscribeStream extends Request
{

}