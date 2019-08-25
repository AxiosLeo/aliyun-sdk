<?php

namespace aliyun\sdk\services\Push20150827;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150827
 *
 * @package aliyun\sdk\services\Push20150827
 * @method PushMessageToAndroid PushMessageToAndroid()
 * @method QueryDeviceStat QueryDeviceStat()
 * @method QueryTags QueryTags()
 * @method PushByteMessage PushByteMessage()
 * @method BindTag BindTag()
 * @method BatchGetDevicesInfo BatchGetDevicesInfo()
 * @method QueryPushStat QueryPushStat()
 * @method QueryAppPushStat QueryAppPushStat()
 * @method ListDevicePushRecords ListDevicePushRecords()
 * @method PushNoticeToAndroid PushNoticeToAndroid()
 * @method PushMessageToiOS PushMessageToiOS()
 * @method RevertRpc RevertRpc()
 * @method UnbindTag UnbindTag()
 * @method QueryUniqueDeviceStat QueryUniqueDeviceStat()
 * @method GetDeviceInfos GetDeviceInfos()
 * @method Push Push()
 * @method CancelPush CancelPush()
 * @method Push_GatedLaunch Push_GatedLaunch()
 * @method PushNoticeToiOS PushNoticeToiOS()
 * @method ListTags ListTags()
 */
class V20150827
{
}

/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setMessage($message)
 * @method string getMessage()
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
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setSendType($sendType)
 * @method int getSendType()
 * @method $this setAccounts($accounts)
 * @method string getAccounts()
 * @method $this setDeviceIds($deviceIds)
 * @method string getDeviceIds()
 * @method $this setPushContent($pushContent)
 * @method string getPushContent()
 */
class PushByteMessage extends Request
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
 * @method $this setDevices($devices)
 * @method string getDevices()
 * @method $this setAppId($appId)
 * @method int getAppId()
 */
class BatchGetDevicesInfo extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setMessageId($messageId)
 * @method int getMessageId()
 */
class QueryPushStat extends Request
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
class QueryAppPushStat extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDevicePushRecords extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setAndroidExtParameters($androidExtParameters)
 * @method string getAndroidExtParameters()
 */
class PushNoticeToAndroid extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class PushMessageToiOS extends Request
{
}/**
 * @method $this setAppId($appId)
 * @method int getAppId()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setRpcContent($rpcContent)
 * @method string getRpcContent()
 * @method $this setTimeOut($timeOut)
 * @method int getTimeOut()
 */
class RevertRpc extends Request
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
 */
class QueryUniqueDeviceStat extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDevices($devices)
 * @method string getDevices()
 */
class GetDeviceInfos extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setStoreOffline($storeOffline)
 * @method bool getStoreOffline()
 * @method $this setPushTime($pushTime)
 * @method string getPushTime()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 * @method $this setAndroidActivity($androidActivity)
 * @method string getAndroidActivity()
 * @method $this setXiaomiActivity($xiaomiActivity)
 * @method string getXiaomiActivity()
 * @method $this setAndroidOpenUrl($androidOpenUrl)
 * @method string getAndroidOpenUrl()
 * @method $this setAndroidExtParameters($androidExtParameters)
 * @method string getAndroidExtParameters()
 * @method $this setAndroidOpenType($androidOpenType)
 * @method string getAndroidOpenType()
 * @method $this setAndroidMusic($androidMusic)
 * @method string getAndroidMusic()
 * @method $this setRemind($remind)
 * @method bool getRemind()
 * @method $this setiOSMusic($iOSMusic)
 * @method string getiOSMusic()
 * @method $this setiOSBadge($iOSBadge)
 * @method int getiOSBadge()
 * @method $this setiOSTitle($iOSTitle)
 * @method string getiOSTitle()
 * @method $this setiOSSubtitle($iOSSubtitle)
 * @method string getiOSSubtitle()
 * @method $this setiOSNotificationCategory($iOSNotificationCategory)
 * @method string getiOSNotificationCategory()
 * @method $this setiOSMutableContent($iOSMutableContent)
 * @method bool getiOSMutableContent()
 * @method $this setiOSExtParameters($iOSExtParameters)
 * @method string getiOSExtParameters()
 * @method $this setApnsEnv($apnsEnv)
 * @method string getApnsEnv()
 */
class Push extends Request
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
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setType($type)
 * @method int getType()
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setBody($body)
 * @method string getBody()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setTimeOut($timeOut)
 * @method int getTimeOut()
 * @method $this setRemind($remind)
 * @method bool getRemind()
 * @method $this setStoreOffline($storeOffline)
 * @method bool getStoreOffline()
 * @method $this setAndroidActivity($androidActivity)
 * @method string getAndroidActivity()
 * @method $this setXiaomiActivity($xiaomiActivity)
 * @method string getXiaomiActivity()
 * @method $this setAndroidOpenUrl($androidOpenUrl)
 * @method string getAndroidOpenUrl()
 * @method $this setAndroidExtParameters($androidExtParameters)
 * @method string getAndroidExtParameters()
 * @method $this setAndroidOpenType($androidOpenType)
 * @method string getAndroidOpenType()
 * @method $this setAndroidMusic($androidMusic)
 * @method string getAndroidMusic()
 * @method $this setBatchNumber($batchNumber)
 * @method string getBatchNumber()
 * @method $this setiOSMusic($iOSMusic)
 * @method string getiOSMusic()
 * @method $this setiOSBadge($iOSBadge)
 * @method string getiOSBadge()
 * @method $this setiOSTitle($iOSTitle)
 * @method string getiOSTitle()
 * @method $this setiOSSubtitle($iOSSubtitle)
 * @method string getiOSSubtitle()
 * @method $this setiOSNotificationCategory($iOSNotificationCategory)
 * @method string getiOSNotificationCategory()
 * @method $this setiOSMutableContent($iOSMutableContent)
 * @method bool getiOSMutableContent()
 * @method $this setiOSExtParameters($iOSExtParameters)
 * @method string getiOSExtParameters()
 * @method $this setPushTime($pushTime)
 * @method string getPushTime()
 * @method $this setApnsEnv($apnsEnv)
 * @method string getApnsEnv()
 * @method $this setExpireTime($expireTime)
 * @method string getExpireTime()
 */
class Push_GatedLaunch extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTarget($target)
 * @method string getTarget()
 * @method $this setTargetValue($targetValue)
 * @method string getTargetValue()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setEnv($env)
 * @method string getEnv()
 * @method $this setExt($ext)
 * @method string getExt()
 * @method $this setiOSExtParameters($iOSExtParameters)
 * @method string getiOSExtParameters()
 */
class PushNoticeToiOS extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 */
class ListTags extends Request
{
}
