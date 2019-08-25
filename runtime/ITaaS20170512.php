<?php

namespace aliyun\sdk\services\ITaaS20170512;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170512
 *
 * @package aliyun\sdk\services\ITaaS20170512
 * @method TrustDeviceLostClient TrustDeviceLostClient()
 * @method ProduceInstance ProduceInstance()
 * @method CheckBuyShareScreen CheckBuyShareScreen()
 * @method DeleteOpenAgentCommand DeleteOpenAgentCommand()
 * @method CheckCid CheckCid()
 * @method RemoveIPSegment RemoveIPSegment()
 * @method GetWelcomePageURI GetWelcomePageURI()
 * @method GetRegisterHistoryList GetRegisterHistoryList()
 * @method ListByUidAndCidClient ListByUidAndCidClient()
 * @method FeedbackCommand FeedbackCommand()
 * @method GetBoxCodeList GetBoxCodeList()
 * @method SetWelcomePageURI SetWelcomePageURI()
 * @method AliyunADLogin AliyunADLogin()
 * @method PageFindNetDeviceByDTO PageFindNetDeviceByDTO()
 * @method NetDeviceFreeze NetDeviceFreeze()
 * @method RemoveRegisterBox RemoveRegisterBox()
 * @method ShareV2SenderRegister ShareV2SenderRegister()
 * @method AddIPSegment AddIPSegment()
 * @method SaveOrUpdateCommandTaskByCidAndId SaveOrUpdateCommandTaskByCidAndId()
 * @method GetRegisterBoxList GetRegisterBoxList()
 * @method TrustDeviceRegisterClient TrustDeviceRegisterClient()
 * @method HardwareDataCollection HardwareDataCollection()
 * @method ExecuteCommandTaskByCidAndId ExecuteCommandTaskByCidAndId()
 * @method SoftwareDataCollection SoftwareDataCollection()
 * @method SaveOrUpdateOpenAgentCommand SaveOrUpdateOpenAgentCommand()
 * @method LogOut LogOut()
 * @method UpdateOpenUserByDTO UpdateOpenUserByDTO()
 * @method FetchCommand FetchCommand()
 * @method CreateBoxCode CreateBoxCode()
 * @method NetDeviceDisconnectionService NetDeviceDisconnectionService()
 * @method ExportOpenUserByDTO ExportOpenUserByDTO()
 * @method OAAuthSMSCodeService OAAuthSMSCodeService()
 * @method AppFunctionModuleService AppFunctionModuleService()
 * @method ReleaseInstance ReleaseInstance()
 * @method ResumeInstance ResumeInstance()
 * @method InitOTP InitOTP()
 * @method HeartbeatService HeartbeatService()
 * @method MdmEnrollStart MdmEnrollStart()
 * @method GetCompanyId4BoxActived GetCompanyId4BoxActived()
 * @method RemoveBoxCode RemoveBoxCode()
 * @method TrustDeviceDeleteClient TrustDeviceDeleteClient()
 * @method GetOpenNacByCid GetOpenNacByCid()
 * @method ImportOpenUserByFile ImportOpenUserByFile()
 * @method AuthUpgradeService AuthUpgradeService()
 * @method UpdateEnterpriseConfig UpdateEnterpriseConfig()
 * @method TrustDeviceDeteleService TrustDeviceDeteleService()
 * @method TrustDeviceOperate TrustDeviceOperate()
 * @method OASendSMSService OASendSMSService()
 * @method SyncOTP SyncOTP()
 * @method UpdateIPSegment UpdateIPSegment()
 * @method OAPCLogOutService OAPCLogOutService()
 * @method CheckIPSegment CheckIPSegment()
 * @method PageFindDto PageFindDto()
 * @method UpateOpenNacByIdAndCid UpateOpenNacByIdAndCid()
 * @method PageFindTrustDeviceByDTO PageFindTrustDeviceByDTO()
 * @method UpdateRoomName UpdateRoomName()
 * @method GetIPSegmentStatus GetIPSegmentStatus()
 * @method PageFindByDTO PageFindByDTO()
 * @method CeaseInstance CeaseInstance()
 * @method SetIPSegmentStatus SetIPSegmentStatus()
 * @method ShareV2SendMessageUrl ShareV2SendMessageUrl()
 * @method GetRegisterBoxNumber GetRegisterBoxNumber()
 * @method UpgradeService UpgradeService()
 * @method OARefreshService OARefreshService()
 * @method SetAuthType SetAuthType()
 * @method GetIPSegmentsList GetIPSegmentsList()
 * @method CheckBuyVideoConference CheckBuyVideoConference()
 */
class V20170512
{
}

/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setQueryUmid($queryUmid)
 * @method string getQueryUmid()
 * @method $this setOperateType($operateType)
 * @method int getOperateType()
 */
class TrustDeviceLostClient extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setProduceParameter($produceParameter)
 * @method string getProduceParameter()
 */
class ProduceInstance extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class CheckBuyShareScreen extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteOpenAgentCommand extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setCode($code)
 * @method string getCode()
 */
class CheckCid extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class RemoveIPSegment extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetWelcomePageURI extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetRegisterHistoryList extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 */
class ListByUidAndCidClient extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setPushId($pushId)
 * @method int getPushId()
 * @method $this setPushType($pushType)
 * @method int getPushType()
 * @method $this setResultCode($resultCode)
 * @method int getResultCode()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class FeedbackCommand extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetBoxCodeList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setWelcomeUri($welcomeUri)
 * @method string getWelcomeUri()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class SetWelcomePageURI extends Request
{
}/**
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class AliyunADLogin extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setAuthType($authType)
 * @method int getAuthType()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setRows($rows)
 * @method int getRows()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setMapStatus($mapStatus)
 * @method int getMapStatus()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setSerialNo($serialNo)
 * @method string getSerialNo()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setUmid($umid)
 * @method string getUmid()
 */
class PageFindNetDeviceByDTO extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setOperateType($operateType)
 * @method int getOperateType()
 */
class NetDeviceFreeze extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setDrSessionId($drSessionId)
 * @method string getDrSessionId()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class RemoveRegisterBox extends Request
{
}/**
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setScreenCode($screenCode)
 * @method string getScreenCode()
 * @method $this setMqEnable($mqEnable)
 * @method string getMqEnable()
 * @method $this setShareVersion($shareVersion)
 * @method int getShareVersion()
 * @method $this setSignatureType($signatureType)
 * @method string getSignatureType()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setLocalIP($localIP)
 * @method string getLocalIP()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ShareV2SenderRegister extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setIpSegment($ipSegment)
 * @method string getIpSegment()
 * @method $this setGuestFlag($guestFlag)
 * @method int getGuestFlag()
 * @method $this setMemo($memo)
 * @method string getMemo()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class AddIPSegment extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setCommandId($commandId)
 * @method int getCommandId()
 * @method $this setCommandName($commandName)
 * @method string getCommandName()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setMark($mark)
 * @method string getMark()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setExpiredate($expiredate)
 * @method string getExpiredate()
 * @method $this setSupportType($supportType)
 * @method int getSupportType()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setExcludesList($excludesList)
 * @method string getExcludesList()
 * @method $this setPushList($pushList)
 * @method string getPushList()
 * @method $this setPushUmidList($pushUmidList)
 * @method string getPushUmidList()
 */
class SaveOrUpdateCommandTaskByCidAndId extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetRegisterBoxList extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setMacs($macs)
 * @method string getMacs()
 * @method $this setSerialNo($serialNo)
 * @method string getSerialNo()
 * @method $this setUtdid($utdid)
 * @method string getUtdid()
 * @method $this setDeviceUmid($deviceUmid)
 * @method string getDeviceUmid()
 * @method $this setClientIp($clientIp)
 * @method string getClientIp()
 * @method $this setRtid($rtid)
 * @method string getRtid()
 */
class TrustDeviceRegisterClient extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setHardwareInfo($hardwareInfo)
 * @method string getHardwareInfo()
 */
class HardwareDataCollection extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setOptionType($optionType)
 * @method int getOptionType()
 */
class ExecuteCommandTaskByCidAndId extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setSoftwareInfojson($softwareInfojson)
 * @method string getSoftwareInfojson()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 */
class SoftwareDataCollection extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setCommandName($commandName)
 * @method string getCommandName()
 * @method $this setSupportType($supportType)
 * @method int getSupportType()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class SaveOrUpdateOpenAgentCommand extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 */
class LogOut extends Request
{
}/**
 * @method $this setCallerParentId($callerParentId)
 * @method string getCallerParentId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setNickPinyin($nickPinyin)
 * @method string getNickPinyin()
 * @method $this setGender($gender)
 * @method string getGender()
 * @method $this setAdAccount($adAccount)
 * @method string getAdAccount()
 * @method $this setNick($nick)
 * @method string getNick()
 * @method $this setMobilePhone($mobilePhone)
 * @method string getMobilePhone()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setStateCode($stateCode)
 * @method string getStateCode()
 * @method $this setAdDomain($adDomain)
 * @method string getAdDomain()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class UpdateOpenUserByDTO extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setPushId($pushId)
 * @method int getPushId()
 * @method $this setPushType($pushType)
 * @method int getPushType()
 */
class FetchCommand extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class CreateBoxCode extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setOperateType($operateType)
 * @method int getOperateType()
 */
class NetDeviceDisconnectionService extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 */
class ExportOpenUserByDTO extends Request
{
}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setMobilePhone($mobilePhone)
 * @method string getMobilePhone()
 * @method $this setStateCode($stateCode)
 * @method string getStateCode()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setSmsCode($smsCode)
 * @method string getSmsCode()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class OAAuthSMSCodeService extends Request
{
}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setSignatureType($signatureType)
 * @method string getSignatureType()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 */
class AppFunctionModuleService extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class ReleaseInstance extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class ResumeInstance extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setTokenKey($tokenKey)
 * @method string getTokenKey()
 * @method $this setEncryptData($encryptData)
 * @method string getEncryptData()
 */
class InitOTP extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setDns($dns)
 * @method string getDns()
 * @method $this setIs64System($is64System)
 * @method string getIs64System()
 * @method $this setIsUacEnable($isUacEnable)
 * @method string getIsUacEnable()
 * @method $this setAdministrator($administrator)
 * @method string getAdministrator()
 * @method $this setProtocolVersion($protocolVersion)
 * @method string getProtocolVersion()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setDeviceLang($deviceLang)
 * @method string getDeviceLang()
 * @method $this setDeviceStatus($deviceStatus)
 * @method int getDeviceStatus()
 * @method $this setPunishStatus($punishStatus)
 * @method int getPunishStatus()
 * @method $this setPrisonBreak($prisonBreak)
 * @method int getPrisonBreak()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setSystemBootTime($systemBootTime)
 * @method int getSystemBootTime()
 * @method $this setSystemShutdownTime($systemShutdownTime)
 * @method int getSystemShutdownTime()
 * @method $this setOsVersion($osVersion)
 * @method string getOsVersion()
 */
class HeartbeatService extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setUmidToken($umidToken)
 * @method string getUmidToken()
 * @method $this setUtdid($utdid)
 * @method string getUtdid()
 * @method $this setPrimaryVersion($primaryVersion)
 * @method int getPrimaryVersion()
 * @method $this setSecondVersion($secondVersion)
 * @method int getSecondVersion()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 */
class MdmEnrollStart extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetCompanyId4BoxActived extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class RemoveBoxCode extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setQueryUmid($queryUmid)
 * @method string getQueryUmid()
 */
class TrustDeviceDeleteClient extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 */
class GetOpenNacByCid extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setFileContext($fileContext)
 * @method string getFileContext()
 */
class ImportOpenUserByFile extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setCurVer($curVer)
 * @method string getCurVer()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 */
class AuthUpgradeService extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setConfigKey($configKey)
 * @method string getConfigKey()
 * @method $this setConfigValue($configValue)
 * @method string getConfigValue()
 * @method $this setMemo($memo)
 * @method string getMemo()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class UpdateEnterpriseConfig extends Request
{
}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setUmid($umid)
 * @method string getUmid()
 */
class TrustDeviceDeteleService extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setOperateType($operateType)
 * @method int getOperateType()
 */
class TrustDeviceOperate extends Request
{
}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setMobilePhone($mobilePhone)
 * @method string getMobilePhone()
 * @method $this setStateCode($stateCode)
 * @method string getStateCode()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class OASendSMSService extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setTokenKey($tokenKey)
 * @method string getTokenKey()
 * @method $this setEncryptData($encryptData)
 * @method string getEncryptData()
 */
class SyncOTP extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setUuid($uuid)
 * @method string getUuid()
 * @method $this setIpSegment($ipSegment)
 * @method string getIpSegment()
 * @method $this setGuestFlag($guestFlag)
 * @method int getGuestFlag()
 * @method $this setMemo($memo)
 * @method string getMemo()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class UpdateIPSegment extends Request
{
}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setSid($sid)
 * @method string getSid()
 */
class OAPCLogOutService extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class CheckIPSegment extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setMapStatus($mapStatus)
 * @method int getMapStatus()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setRows($rows)
 * @method int getRows()
 */
class PageFindDto extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setWifiSsid($wifiSsid)
 * @method string getWifiSsid()
 * @method $this setNetworkAuthType($networkAuthType)
 * @method int getNetworkAuthType()
 */
class UpateOpenNacByIdAndCid extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setMapStatus($mapStatus)
 * @method int getMapStatus()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setRows($rows)
 * @method int getRows()
 */
class PageFindTrustDeviceByDTO extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setScreenCode($screenCode)
 * @method string getScreenCode()
 * @method $this setDrName($drName)
 * @method string getDrName()
 */
class UpdateRoomName extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetIPSegmentStatus extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setMac($mac)
 * @method string getMac()
 * @method $this setAuthType($authType)
 * @method int getAuthType()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setNetworkType($networkType)
 * @method string getNetworkType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setRows($rows)
 * @method int getRows()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setMapStatus($mapStatus)
 * @method int getMapStatus()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setSerialNo($serialNo)
 * @method string getSerialNo()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setUmid($umid)
 * @method string getUmid()
 */
class PageFindByDTO extends Request
{
}/**
 * @method $this setTraceId($traceId)
 * @method string getTraceId()
 * @method $this setSpMsg($spMsg)
 * @method string getSpMsg()
 */
class CeaseInstance extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setFlag($flag)
 * @method bool getFlag()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class SetIPSegmentStatus extends Request
{
}/**
 * @method $this setGuestUserId($guestUserId)
 * @method string getGuestUserId()
 * @method $this setMSG($mSG)
 * @method string getMSG()
 * @method $this setShareVersion($shareVersion)
 * @method int getShareVersion()
 * @method $this setSignatureType($signatureType)
 * @method string getSignatureType()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setLocalIP($localIP)
 * @method string getLocalIP()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ShareV2SendMessageUrl extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetRegisterBoxNumber extends Request
{
}/**
 * @method $this setClientCID($clientCID)
 * @method string getClientCID()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setCurVer($curVer)
 * @method string getCurVer()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setSerialNo($serialNo)
 * @method string getSerialNo()
 */
class UpgradeService extends Request
{
}/**
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setCid($cid)
 * @method string getCid()
 * @method $this setRid($rid)
 * @method string getRid()
 * @method $this setUmid($umid)
 * @method string getUmid()
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 */
class OARefreshService extends Request
{
}/**
 * @method $this setSid($sid)
 * @method string getSid()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 * @method $this setLanguage($language)
 * @method string getLanguage()
 * @method $this setOsType($osType)
 * @method string getOsType()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setAppVersion($appVersion)
 * @method string getAppVersion()
 * @method $this setIds($ids)
 * @method string getIds()
 * @method $this setNetDeviceAuthType($netDeviceAuthType)
 * @method int getNetDeviceAuthType()
 */
class SetAuthType extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class GetIPSegmentsList extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSysFrom($sysFrom)
 * @method string getSysFrom()
 * @method $this setOperator($operator)
 * @method string getOperator()
 * @method $this setAuthType($authType)
 * @method string getAuthType()
 */
class CheckBuyVideoConference extends Request
{
}
