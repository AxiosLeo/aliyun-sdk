<?php

namespace aliyun\sdk\services\Iot20160104;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160104
 *
 * @package aliyun\sdk\services\Iot20160104
 * @method DeviceGrant DeviceGrant()
 * @method Sub Sub()
 * @method PushByteMessage PushByteMessage()
 * @method Pub Pub()
 * @method RevertRpc RevertRpc()
 * @method DevicePermitModify DevicePermitModify()
 * @method UnSub UnSub()
 * @method DeviceRevokeByTopic DeviceRevokeByTopic()
 * @method ListDevicePermits ListDevicePermits()
 * @method DeviceRevokeById DeviceRevokeById()
 */
class V20160104
{
}

/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DeviceGrant extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setSubCallback($subCallback)
 * @method string getSubCallback()
 * @method $this setTopicList($topicList)
 * @method string getTopicList()
 * @method $this setTopic($topic)
 * @method array getTopic()
 */
class Sub extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
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
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($messageContent)
 * @method string getMessageContent()
 */
class Pub extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
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
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DevicePermitModify extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTopicList($topicList)
 * @method string getTopicList()
 * @method $this setTopic($topic)
 * @method array getTopic()
 */
class UnSub extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DeviceRevokeByTopic extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class ListDevicePermits extends Request
{
}/**
 * @method $this setAppKey($appKey)
 * @method int getAppKey()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class DeviceRevokeById extends Request
{
}
