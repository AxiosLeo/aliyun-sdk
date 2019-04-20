<?php

namespace aliyun\sdk\services\Rtc20180111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180111
 *
 * @package aliyun\sdk\services\Rtc20180111
 * @method MuteAudioAll MuteAudioAll()
 * @method UpdateRTCChannel UpdateRTCChannel()
 * @method GetTaskStatus GetTaskStatus()
 * @method RemoveTerminals RemoveTerminals()
 * @method ModifyConference ModifyConference()
 * @method ReceiveNotify ReceiveNotify()
 * @method DescribeRtcUserResourcePackage DescribeRtcUserResourcePackage()
 * @method DescribeApps DescribeApps()
 * @method StopTask StopTask()
 * @method StopMPUTask StopMPUTask()
 * @method RTCProxyMessage RTCProxyMessage()
 * @method CreateApp CreateApp()
 * @method StopApp StopApp()
 * @method CreateChannelToken CreateChannelToken()
 * @method DescribeRtcPeakUserCntData DescribeRtcPeakUserCntData()
 * @method DescribeRtcDurationData DescribeRtcDurationData()
 * @method DisableApp DisableApp()
 * @method DeleteApp DeleteApp()
 * @method ModifyApp ModifyApp()
 * @method DescribeRtcRealTimeRecordList DescribeRtcRealTimeRecordList()
 * @method DescribeRtcUserCntData DescribeRtcUserCntData()
 * @method UpdateTaskParam UpdateTaskParam()
 * @method MuteAudio MuteAudio()
 * @method EnableApp EnableApp()
 * @method UnmuteAudio UnmuteAudio()
 * @method StopRTCApp StopRTCApp()
 * @method StartMPUTask StartMPUTask()
 * @method DescribeRtcRecordList DescribeRtcRecordList()
 * @method DescribeRtcPeakChannelCntData DescribeRtcPeakChannelCntData()
 * @method DescribeRecordList DescribeRecordList()
 * @method DeleteRTCChannel DeleteRTCChannel()
 * @method StartApp StartApp()
 * @method CreateChannel CreateChannel()
 * @method DeleteChannel DeleteChannel()
 * @method UpdateChannel UpdateChannel()
 * @method RemoveParticipants RemoveParticipants()
 * @method DeleteTemplate DeleteTemplate()
 * @method DescribeRtcDiamondValue DescribeRtcDiamondValue()
 * @method CreateConference CreateConference()
 * @method UnmuteAudioAll UnmuteAudioAll()
 * @method CreateTemplate CreateTemplate()
 * @method GetTaskParam GetTaskParam()
 * @method DescribeRtcRecordDetail DescribeRtcRecordDetail()
 * @method GetTemplateInfo GetTemplateInfo()
 * @method DescribeRtcChannelCntData DescribeRtcChannelCntData()
 * @method DeleteConference DeleteConference()
 * @method CreateRTCApp CreateRTCApp()
 * @method DescribeRecordDetail DescribeRecordDetail()
 * @method GetAllTemplate GetAllTemplate()
 * @method DescribeRealTimeRecordList DescribeRealTimeRecordList()
 * @method StartTask StartTask()
 * @method Kick Kick()
 * @method GetMPUTaskStatus GetMPUTaskStatus()
 * @method DescribeConferenceAuthInfo DescribeConferenceAuthInfo()
 * @method CreateRTCChannel CreateRTCChannel()
 * @method DescribeRtcStatis DescribeRtcStatis()
 * @method DescribeStatis DescribeStatis()
 * @method DescribeRealTimeRecordDetail DescribeRealTimeRecordDetail()
 * @method DescribeRtcRealTimeRecordDetail DescribeRtcRealTimeRecordDetail()
 */
class V20180111
{
}

/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantId($participantId)
 * @method string getParticipantId()
 */
class MuteAudioAll extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class UpdateRTCChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class GetTaskStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTerminalIds($terminalIds)
 * @method array getTerminalIds()
 */
class RemoveTerminals extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setConferenceName($conferenceName)
 * @method string getConferenceName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRemindNotice($remindNotice)
 * @method int getRemindNotice()
 */
class ModifyConference extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setEvent($event)
 * @method string getEvent()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setContent($content)
 * @method string getContent()
 */
class ReceiveNotify extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class DescribeRtcUserResourcePackage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeApps extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class StopTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class StopMPUTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setBroadcast($broadcast)
 * @method bool getBroadcast()
 * @method $this setAllowGroups($allowGroups)
 * @method array getAllowGroups()
 * @method $this setDenyGroups($denyGroups)
 * @method array getDenyGroups()
 * @method $this setContentType($contentType)
 * @method string getContentType()
 * @method $this setContent($content)
 * @method string getContent()
 */
class RTCProxyMessage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setServiceAreas($serviceAreas)
 * @method array getServiceAreas()
 */
class CreateApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class StopApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setUId($uId)
 * @method string getUId()
 * @method $this setNonce($nonce)
 * @method string getNonce()
 */
class CreateChannelToken extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeRtcPeakUserCntData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeRtcDurationData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DisableApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class ModifyApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeRtcRealTimeRecordList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeRtcUserCntData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setMixPanes($mixPanes)
 * @method array getMixPanes()
 */
class UpdateTaskParam extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantIds($participantIds)
 * @method array getParticipantIds()
 */
class MuteAudio extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class EnableApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantIds($participantIds)
 * @method array getParticipantIds()
 */
class UnmuteAudio extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class StopRTCApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setMediaEncode($mediaEncode)
 * @method int getMediaEncode()
 * @method $this setBackgroundColor($backgroundColor)
 * @method int getBackgroundColor()
 * @method $this setLayoutIds($layoutIds)
 * @method array getLayoutIds()
 * @method $this setUserPanes($userPanes)
 * @method array getUserPanes()
 * @method $this setStreamURL($streamURL)
 * @method string getStreamURL()
 */
class StartMPUTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIdType($idType)
 * @method string getIdType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setSortType($sortType)
 * @method string getSortType()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeRtcRecordList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeRtcPeakChannelCntData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setIdType($idType)
 * @method string getIdType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setSortType($sortType)
 * @method string getSortType()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeRecordList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class DeleteRTCChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class StartApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class CreateChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class DeleteChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setNonce($nonce)
 * @method string getNonce()
 */
class UpdateChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantIds($participantIds)
 * @method array getParticipantIds()
 */
class RemoveParticipants extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class DeleteTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setDiamondDataId($diamondDataId)
 * @method string getDiamondDataId()
 * @method $this setQueryValueType($queryValueType)
 * @method string getQueryValueType()
 * @method $this setQueryValue($queryValue)
 * @method string getQueryValue()
 */
class DescribeRtcDiamondValue extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceName($conferenceName)
 * @method string getConferenceName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRemindNotice($remindNotice)
 * @method int getRemindNotice()
 */
class CreateConference extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantId($participantId)
 * @method string getParticipantId()
 */
class UnmuteAudioAll extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setMixMode($mixMode)
 * @method int getMixMode()
 * @method $this setServiceMode($serviceMode)
 * @method int getServiceMode()
 * @method $this setCallBack($callBack)
 * @method string getCallBack()
 * @method $this setMaxMixStreamCount($maxMixStreamCount)
 * @method int getMaxMixStreamCount()
 * @method $this setMediaConfig($mediaConfig)
 * @method int getMediaConfig()
 * @method $this setLayOut($layOut)
 * @method array getLayOut()
 * @method $this setRecordConfig($recordConfig)
 * @method array getRecordConfig()
 * @method $this setLiveConfig($liveConfig)
 * @method array getLiveConfig()
 */
class CreateTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class GetTaskParam extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeRtcRecordDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class GetTemplateInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class DescribeRtcChannelCntData extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 */
class DeleteConference extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setServiceAreas($serviceAreas)
 * @method array getServiceAreas()
 * @method $this setBillType($billType)
 * @method string getBillType()
 */
class CreateRTCApp extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeRecordDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetAllTemplate extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeRealTimeRecordList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setIdempotentId($idempotentId)
 * @method string getIdempotentId()
 * @method $this setMixPanes($mixPanes)
 * @method array getMixPanes()
 */
class StartTask extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 * @method $this setParticipantIds($participantIds)
 * @method array getParticipantIds()
 */
class Kick extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetMPUTaskStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConferenceId($conferenceId)
 * @method string getConferenceId()
 */
class DescribeConferenceAuthInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 */
class CreateRTCChannel extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setSortType($sortType)
 * @method string getSortType()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 */
class DescribeRtcStatis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setSortType($sortType)
 * @method string getSortType()
 * @method $this setServiceArea($serviceArea)
 * @method string getServiceArea()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 */
class DescribeStatis extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeRealTimeRecordDetail extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setChannelId($channelId)
 * @method string getChannelId()
 * @method $this setRecordId($recordId)
 * @method string getRecordId()
 */
class DescribeRtcRealTimeRecordDetail extends Request
{

}