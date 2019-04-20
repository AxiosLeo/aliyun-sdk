<?php

namespace aliyun\sdk\services\Push20160801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160801
 *
 * @package aliyun\sdk\services\Push20160801
 * @method UnbindPhone UnbindPhone()
 * @method RemoveTag RemoveTag()
 * @method TracePush TracePush()
 * @method PushMessageToAndroid PushMessageToAndroid()
 * @method QueryDeviceStat QueryDeviceStat()
 * @method QueryTags QueryTags()
 * @method ValidateAppCert ValidateAppCert()
 * @method QueryAliases QueryAliases()
 * @method QueryAppInfo QueryAppInfo()
 * @method ListPushRecords ListPushRecords()
 * @method CertPreflight CertPreflight()
 * @method CheckDevice CheckDevice()
 * @method BindTag BindTag()
 * @method CreateApp CreateApp()
 * @method BindAlias_GatedLaunch BindAlias_GatedLaunch()
 * @method QueryPushStatByMsg QueryPushStatByMsg()
 * @method QueryAppSecurityInfo QueryAppSecurityInfo()
 * @method DeleteApp DeleteApp()
 * @method QueryPushDetail QueryPushDetail()
 * @method QueryPushStatByApp QueryPushStatByApp()
 * @method UploadAppCert UploadAppCert()
 * @method PushNoticeToAndroid PushNoticeToAndroid()
 * @method UnbindAlias UnbindAlias()
 * @method UnbindAlias_GatedLaunch UnbindAlias_GatedLaunch()
 * @method PushMessageToiOS PushMessageToiOS()
 * @method ListApps ListApps()
 * @method UnbindTag UnbindTag()
 * @method QueryUniqueDeviceStat QueryUniqueDeviceStat()
 * @method ModifyAppExtensions ModifyAppExtensions()
 * @method BindAlias BindAlias()
 * @method QueryDevicesByAlias QueryDevicesByAlias()
 * @method TestSms TestSms()
 * @method ListSummaryApps ListSummaryApps()
 * @method Push Push()
 * @method QueryDevicesByAccount QueryDevicesByAccount()
 * @method ModifyAppConfig ModifyAppConfig()
 * @method QueryPushList QueryPushList()
 * @method CheckDevices CheckDevices()
 * @method CancelPush CancelPush()
 * @method QueryAppConfig QueryAppConfig()
 * @method Push_GatedLaunch Push_GatedLaunch()
 * @method QueryDeviceInfo QueryDeviceInfo()
 * @method PushNoticeToiOS PushNoticeToiOS()
 * @method BindPhone BindPhone()
 * @method ListTags ListTags()
 */
class V20160801
{
}

/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class UnbindPhone extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class RemoveTag extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setMessageId($messageId)
 * @method int getMessageId()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class TracePush extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 */
class PushMessageToAndroid extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 */
class QueryDeviceStat extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setClientKey($clientKey)
 * @method string getClientKey()
 * @method $this setKeyType($keyType)
 * @method string getKeyType()
 */
class QueryTags extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setCertPass($certPass)
 * @method string getCertPass()
 * @method $this setIsDevCert($isDevCert)
 * @method bool getIsDevCert()
 */
class ValidateAppCert extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class QueryAliases extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class QueryAppInfo extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListPushRecords extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceToken($deviceToken)
 * @method string getDeviceToken()
 * @method $this setPass($pass)
 * @method string getPass()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setIsDevCert($isDevCert)
 * @method bool getIsDevCert()
 */
class CertPreflight extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class CheckDevice extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setClientKey($clientKey)
 * @method string getClientKey()
 * @method $this setKeyType($keyType)
 * @method string getKeyType()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class BindTag extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setIndustryId($industryId)
 * @method int getIndustryId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateApp extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class BindAlias_GatedLaunch extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setMessageId($messageId)
 * @method int getMessageId()
 */
class QueryPushStatByMsg extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class QueryAppSecurityInfo extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class DeleteApp extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setMessageId($messageId)
 * @method string getMessageId()
 */
class QueryPushDetail extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 */
class QueryPushStatByApp extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setFileItem($fileItem)
 * @method string getFileItem()
 * @method $this setIsDevCert($isDevCert)
 * @method bool getIsDevCert()
 */
class UploadAppCert extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 * @method $this setExtParameters($extParameters)
 * @method string getExtParameters()
 */
class PushNoticeToAndroid extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setUnbindAll($unbindAll)
 * @method bool getUnbindAll()
 */
class UnbindAlias extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 * @method $this setUnbindAll($unbindAll)
 * @method bool getUnbindAll()
 */
class UnbindAlias_GatedLaunch extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 */
class PushMessageToiOS extends Request
{

}/**
 */
class ListApps extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setClientKey($clientKey)
 * @method string getClientKey()
 * @method $this setKeyType($keyType)
 * @method string getKeyType()
 * @method $this setTagName($tagName)
 * @method string getTagName()
 */
class UnbindTag extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 */
class QueryUniqueDeviceStat extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setXmAppSecretKey($xmAppSecretKey)
 * @method string getXmAppSecretKey()
 * @method $this setHwAppKey($hwAppKey)
 * @method string getHwAppKey()
 * @method $this setHwAppSecretKey($hwAppSecretKey)
 * @method string getHwAppSecretKey()
 * @method $this setGcmToken($gcmToken)
 * @method string getGcmToken()
 * @method $this setOppoAppKey($oppoAppKey)
 * @method string getOppoAppKey()
 * @method $this setOppoMasterSecret($oppoMasterSecret)
 * @method string getOppoMasterSecret()
 */
class ModifyAppExtensions extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setAliasName($aliasName)
 * @method string getAliasName()
 */
class BindAlias extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setAlias($alias)
 * @method string getAlias()
 */
class QueryDevicesByAlias extends Request
{

}/**
 * @method $this setSmsTemplateName($smsTemplateName)
 * @method string getSmsTemplateName()
 * @method $this setSmsSign($smsSign)
 * @method string getSmsSign()
 * @method $this setSmsTemplateParams($smsTemplateParams)
 * @method string getSmsTemplateParams()
 * @method $this setSmsReceiver($smsReceiver)
 * @method string getSmsReceiver()
 */
class TestSms extends Request
{

}/**
 */
class ListSummaryApps extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 * @method $this setSendSpeed($sendSpeed)
 * @method int getSendSpeed()
 * @method $this setStoreOffline($storeOffline)
 * @method bool getStoreOffline()
 * @method $this setPushTime($pushTime)
 * @method string getPushTime()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setiOSApnsEnv($iOSApnsEnv)
 * @method string getiOSApnsEnv()
 * @method $this setiOSRemind($iOSRemind)
 * @method bool getiOSRemind()
 * @method $this setiOSRemindBody($iOSRemindBody)
 * @method string getiOSRemindBody()
 * @method $this setiOSBadge($iOSBadge)
 * @method int getiOSBadge()
 * @method $this setiOSBadgeAutoIncrement($iOSBadgeAutoIncrement)
 * @method bool getiOSBadgeAutoIncrement()
 * @method $this setiOSSilentNotification($iOSSilentNotification)
 * @method bool getiOSSilentNotification()
 * @method $this setiOSMusic($iOSMusic)
 * @method string getiOSMusic()
 * @method $this setiOSSubtitle($iOSSubtitle)
 * @method string getiOSSubtitle()
 * @method $this setiOSNotificationCategory($iOSNotificationCategory)
 * @method string getiOSNotificationCategory()
 * @method $this setiOSMutableContent($iOSMutableContent)
 * @method bool getiOSMutableContent()
 * @method $this setiOSExtParameters($iOSExtParameters)
 * @method string getiOSExtParameters()
 * @method $this setAndroidNotifyType($androidNotifyType)
 * @method string getAndroidNotifyType()
 * @method $this setAndroidOpenType($androidOpenType)
 * @method string getAndroidOpenType()
 * @method $this setAndroidActivity($androidActivity)
 * @method string getAndroidActivity()
 * @method $this setAndroidMusic($androidMusic)
 * @method string getAndroidMusic()
 * @method $this setAndroidOpenUrl($androidOpenUrl)
 * @method string getAndroidOpenUrl()
 * @method $this setAndroidXiaoMiActivity($androidXiaoMiActivity)
 * @method string getAndroidXiaoMiActivity()
 * @method $this setAndroidXiaoMiNotifyTitle($androidXiaoMiNotifyTitle)
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method $this setAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody)
 * @method string getAndroidXiaoMiNotifyBody()
 * @method $this setAndroidPopupActivity($androidPopupActivity)
 * @method string getAndroidPopupActivity()
 * @method $this setAndroidPopupTitle($androidPopupTitle)
 * @method string getAndroidPopupTitle()
 * @method $this setAndroidPopupBody($androidPopupBody)
 * @method string getAndroidPopupBody()
 * @method $this setAndroidNotificationBarType($androidNotificationBarType)
 * @method int getAndroidNotificationBarType()
 * @method $this setAndroidNotificationBarPriority($androidNotificationBarPriority)
 * @method int getAndroidNotificationBarPriority()
 * @method $this setAndroidExtParameters($androidExtParameters)
 * @method string getAndroidExtParameters()
 * @method $this setAndroidRemind($androidRemind)
 * @method bool getAndroidRemind()
 * @method $this setAndroidNotificationChannel($androidNotificationChannel)
 * @method string getAndroidNotificationChannel()
 * @method $this setSmsTemplateName($smsTemplateName)
 * @method string getSmsTemplateName()
 * @method $this setSmsSignName($smsSignName)
 * @method string getSmsSignName()
 * @method $this setSmsParams($smsParams)
 * @method string getSmsParams()
 * @method $this setSmsDelaySecs($smsDelaySecs)
 * @method int getSmsDelaySecs()
 * @method $this setSmsSendPolicy($smsSendPolicy)
 * @method int getSmsSendPolicy()
 */
class Push extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setAccount($account)
 * @method string getAccount()
 */
class QueryDevicesByAccount extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setPackageName($packageName)
 * @method string getPackageName()
 * @method $this setDevCertKey($devCertKey)
 * @method string getDevCertKey()
 * @method $this setDevCertPass($devCertPass)
 * @method string getDevCertPass()
 * @method $this setProductCertKey($productCertKey)
 * @method string getProductCertKey()
 * @method $this setProductCertPass($productCertPass)
 * @method string getProductCertPass()
 * @method $this setBundleId($bundleId)
 * @method string getBundleId()
 */
class ModifyAppConfig extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryPushList extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceIds($deviceIds)
 * @method string getDeviceIds()
 */
class CheckDevices extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setMessageId($messageId)
 * @method int getMessageId()
 */
class CancelPush extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class QueryAppConfig extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setDeviceType($deviceType)
 * @method string getDeviceType()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setSendSpeed($sendSpeed)
 * @method int getSendSpeed()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 * @method $this setPushTime($pushTime)
 * @method string getPushTime()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setStoreOffline($storeOffline)
 * @method bool getStoreOffline()
 * @method $this setBatchNumber($batchNumber)
 * @method string getBatchNumber()
 * @method $this setAndroidNotifyType($androidNotifyType)
 * @method string getAndroidNotifyType()
 * @method $this setAndroidOpenType($androidOpenType)
 * @method string getAndroidOpenType()
 * @method $this setAndroidActivity($androidActivity)
 * @method string getAndroidActivity()
 * @method $this setAndroidOpenUrl($androidOpenUrl)
 * @method string getAndroidOpenUrl()
 * @method $this setAndroidXiaoMiActivity($androidXiaoMiActivity)
 * @method string getAndroidXiaoMiActivity()
 * @method $this setAndroidXiaoMiNotifyTitle($androidXiaoMiNotifyTitle)
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method $this setAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody)
 * @method string getAndroidXiaoMiNotifyBody()
 * @method $this setAndroidPopupActivity($androidPopupActivity)
 * @method string getAndroidPopupActivity()
 * @method $this setAndroidPopupTitle($androidPopupTitle)
 * @method string getAndroidPopupTitle()
 * @method $this setAndroidPopupBody($androidPopupBody)
 * @method string getAndroidPopupBody()
 * @method $this setAndroidMusic($androidMusic)
 * @method string getAndroidMusic()
 * @method $this setAndroidNotificationBarType($androidNotificationBarType)
 * @method int getAndroidNotificationBarType()
 * @method $this setAndroidNotificationBarPriority($androidNotificationBarPriority)
 * @method int getAndroidNotificationBarPriority()
 * @method $this setAndroidNotificationChannel($androidNotificationChannel)
 * @method string getAndroidNotificationChannel()
 * @method $this setAndroidExtParameters($androidExtParameters)
 * @method string getAndroidExtParameters()
 * @method $this setAndroidRemind($androidRemind)
 * @method bool getAndroidRemind()
 * @method $this setiOSApnsEnv($iOSApnsEnv)
 * @method string getiOSApnsEnv()
 * @method $this setiOSRemind($iOSRemind)
 * @method bool getiOSRemind()
 * @method $this setiOSRemindBody($iOSRemindBody)
 * @method string getiOSRemindBody()
 * @method $this setiOSMusic($iOSMusic)
 * @method string getiOSMusic()
 * @method $this setiOSBadge($iOSBadge)
 * @method int getiOSBadge()
 * @method $this setiOSBadgeAutoIncrement($iOSBadgeAutoIncrement)
 * @method bool getiOSBadgeAutoIncrement()
 * @method $this setiOSSilentNotification($iOSSilentNotification)
 * @method bool getiOSSilentNotification()
 * @method $this setiOSSubtitle($iOSSubtitle)
 * @method string getiOSSubtitle()
 * @method $this setiOSNotificationCategory($iOSNotificationCategory)
 * @method string getiOSNotificationCategory()
 * @method $this setiOSMutableContent($iOSMutableContent)
 * @method bool getiOSMutableContent()
 * @method $this setiOSExtParameters($iOSExtParameters)
 * @method string getiOSExtParameters()
 * @method $this setSmsTemplateName($smsTemplateName)
 * @method string getSmsTemplateName()
 * @method $this setSmsSignName($smsSignName)
 * @method string getSmsSignName()
 * @method $this setSmsParams($smsParams)
 * @method string getSmsParams()
 * @method $this setSmsDelaySecs($smsDelaySecs)
 * @method int getSmsDelaySecs()
 * @method $this setSmsSendPolicy($smsSendPolicy)
 * @method int getSmsSendPolicy()
 */
class Push_GatedLaunch extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class QueryDeviceInfo extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setApnsEnv($apnsEnv)
 * @method string getApnsEnv()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setJobKey($jobKey)
 * @method string getJobKey()
 * @method $this setExtParameters($extParameters)
 * @method string getExtParameters()
 */
class PushNoticeToiOS extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class BindPhone extends Request
{

}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class ListTags extends Request
{

}