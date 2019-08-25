<?php

namespace aliyun\sdk\services\MoPen20180211;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180211
 *
 * @package aliyun\sdk\services\MoPen20180211
 * @method MoPenSendMqttMessage MoPenSendMqttMessage()
 * @method MoPenDoRecognize MoPenDoRecognize()
 * @method MoPenFindGroup MoPenFindGroup()
 * @method MoPenAddGroupMember MoPenAddGroupMember()
 * @method MoPenQueryCanvas MoPenQueryCanvas()
 * @method MoPenCreateDevice MoPenCreateDevice()
 * @method MoPenBindIsv MoPenBindIsv()
 * @method MopenCreateGroup MopenCreateGroup()
 * @method MoPenDeleteGroup MoPenDeleteGroup()
 * @method MoPenDeleteGroupMember MoPenDeleteGroupMember()
 */
class V20180211
{
}

/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setPayload($payload)
 * @method string getPayload()
 */
class MoPenSendMqttMessage extends Request
{
}/**
 * @method $this setCanvasId($canvasId)
 * @method int getCanvasId()
 * @method $this setStartX($startX)
 * @method int getStartX()
 * @method $this setStartY($startY)
 * @method int getStartY()
 * @method $this setEndX($endX)
 * @method int getEndX()
 * @method $this setEndY($endY)
 * @method int getEndY()
 * @method $this setJsonConf($jsonConf)
 * @method string getJsonConf()
 * @method $this setExportType($exportType)
 * @method string getExportType()
 */
class MoPenDoRecognize extends Request
{
}/**
 * @method $this setCreator($creator)
 * @method string getCreator()
 */
class MoPenFindGroup extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class MoPenAddGroupMember extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setPageId($pageId)
 * @method int getPageId()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class MoPenQueryCanvas extends Request
{
}/**
 * @method $this setDeviceType($deviceType)
 * @method int getDeviceType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class MoPenCreateDevice extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setOrderKey($orderKey)
 * @method string getOrderKey()
 */
class MoPenBindIsv extends Request
{
}/**
 * @method $this setCreator($creator)
 * @method string getCreator()
 */
class MopenCreateGroup extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class MoPenDeleteGroup extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class MoPenDeleteGroupMember extends Request
{
}
