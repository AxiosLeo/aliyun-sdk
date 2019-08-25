<?php

namespace aliyun\sdk\services\Iot20170620;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170620
 *
 * @package aliyun\sdk\services\Iot20170620
 * @method UpdateDeviceShadow UpdateDeviceShadow()
 * @method UpdateProduct UpdateProduct()
 * @method QueryApplyStatus QueryApplyStatus()
 * @method CreateProduct CreateProduct()
 * @method GetCats GetCats()
 * @method QueryPageByApplyId QueryPageByApplyId()
 * @method RegistDevice RegistDevice()
 * @method GetDeviceShadow GetDeviceShadow()
 * @method Pub Pub()
 * @method BatchGetDeviceState BatchGetDeviceState()
 * @method PubBroadcast PubBroadcast()
 * @method QueryDeviceByName QueryDeviceByName()
 * @method QueryDevice QueryDevice()
 * @method ApplyDeviceWithNames ApplyDeviceWithNames()
 */
class V20170620
{
}

/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setShadowMessage($shadowMessage)
 * @method string getShadowMessage()
 */
class UpdateDeviceShadow extends Request
{
}/**
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setProductDesc($productDesc)
 * @method string getProductDesc()
 * @method $this setExtProps($extProps)
 * @method string getExtProps()
 * @method $this setCatId($catId)
 * @method int getCatId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class UpdateProduct extends Request
{
}/**
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryApplyStatus extends Request
{
}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCatId($catId)
 * @method int getCatId()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setExtProps($extProps)
 * @method string getExtProps()
 * @method $this setSecurityPolicy($securityPolicy)
 * @method string getSecurityPolicy()
 */
class CreateProduct extends Request
{
}/**
 * @method $this setRootId($rootId)
 * @method int getRootId()
 */
class GetCats extends Request
{
}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryPageByApplyId extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class RegistDevice extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setShadowMessage($shadowMessage)
 * @method string getShadowMessage()
 */
class GetDeviceShadow extends Request
{
}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setQos($qos)
 * @method int getQos()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($messageContent)
 * @method string getMessageContent()
 */
class Pub extends Request
{
}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchGetDeviceState extends Request
{
}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setMessageContent($messageContent)
 * @method string getMessageContent()
 */
class PubBroadcast extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceByName extends Request
{
}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryDevice extends Request
{
}/**
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ApplyDeviceWithNames extends Request
{
}
