<?php

namespace aliyun\sdk\services\Iot20180120;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180120
 *
 * @package aliyun\sdk\services\Iot20180120
 * @method SaveDeviceProp SaveDeviceProp()
 * @method UpdateRule UpdateRule()
 * @method DeleteDeviceProp DeleteDeviceProp()
 * @method QueryDeviceDesiredProperty QueryDeviceDesiredProperty()
 * @method UpdateDeviceShadow UpdateDeviceShadow()
 * @method QueryDeviceGroupByDevice QueryDeviceGroupByDevice()
 * @method UpdateProduct UpdateProduct()
 * @method GetDeviceStatus GetDeviceStatus()
 * @method UpdateRuleAction UpdateRuleAction()
 * @method GetRuleAction GetRuleAction()
 * @method GetThingTopo GetThingTopo()
 * @method ListProductTags ListProductTags()
 * @method UpdateProductTopic UpdateProductTopic()
 * @method DeleteProduct DeleteProduct()
 * @method EnableThing EnableThing()
 * @method CreateProduct CreateProduct()
 * @method QueryDeviceGroupTagList QueryDeviceGroupTagList()
 * @method QueryPageByApplyId QueryPageByApplyId()
 * @method RemoveThingTopo RemoveThingTopo()
 * @method QueryDeviceGroupByTags QueryDeviceGroupByTags()
 * @method QueryDeviceStatistics QueryDeviceStatistics()
 * @method DeleteRule DeleteRule()
 * @method BatchRegisterDevice BatchRegisterDevice()
 * @method QueryDeviceServiceData QueryDeviceServiceData()
 * @method DeleteProductTopic DeleteProductTopic()
 * @method BatchRegisterDeviceWithApplyId BatchRegisterDeviceWithApplyId()
 * @method InvokeThingService InvokeThingService()
 * @method CreateProductTopic CreateProductTopic()
 * @method GetDeviceShadow GetDeviceShadow()
 * @method GetRule GetRule()
 * @method QueryDeviceListByDeviceGroup QueryDeviceListByDeviceGroup()
 * @method UpdateProductTags UpdateProductTags()
 * @method ListRule ListRule()
 * @method QueryDevicePropertyStatus QueryDevicePropertyStatus()
 * @method DeleteProductTags DeleteProductTags()
 * @method SetDeviceProperty SetDeviceProperty()
 * @method Pub Pub()
 * @method DisableThing DisableThing()
 * @method DeleteDevice DeleteDevice()
 * @method SetDeviceDesiredProperty SetDeviceDesiredProperty()
 * @method StopRule StopRule()
 * @method RegisterDevice RegisterDevice()
 * @method QueryDeviceEventData QueryDeviceEventData()
 * @method CreateDeviceGroup CreateDeviceGroup()
 * @method QueryDeviceProp QueryDeviceProp()
 * @method BatchUpdateDeviceNickname BatchUpdateDeviceNickname()
 * @method DeleteRuleAction DeleteRuleAction()
 * @method SetDevicesProperty SetDevicesProperty()
 * @method DeleteDeviceGroup DeleteDeviceGroup()
 * @method QueryProduct QueryProduct()
 * @method CreateProductTags CreateProductTags()
 * @method QueryTopicReverseRouteTable QueryTopicReverseRouteTable()
 * @method QueryProductTopic QueryProductTopic()
 * @method QueryDevicePropertiesData QueryDevicePropertiesData()
 * @method StartRule StartRule()
 * @method QuerySuperDeviceGroup QuerySuperDeviceGroup()
 * @method GetGatewayBySubDevice GetGatewayBySubDevice()
 * @method QueryDeviceDetail QueryDeviceDetail()
 * @method BatchAddDeviceGroupRelations BatchAddDeviceGroupRelations()
 * @method QueryProductList QueryProductList()
 * @method QueryDeviceFile QueryDeviceFile()
 * @method QueryDeviceGroupList QueryDeviceGroupList()
 * @method SetDeviceGroupTags SetDeviceGroupTags()
 * @method ListProductByTags ListProductByTags()
 * @method UpdateDeviceGroup UpdateDeviceGroup()
 * @method QueryBatchRegisterDeviceStatus QueryBatchRegisterDeviceStatus()
 * @method BatchGetDeviceState BatchGetDeviceState()
 * @method PubBroadcast PubBroadcast()
 * @method QueryDevice QueryDevice()
 * @method ListRuleActions ListRuleActions()
 * @method NotifyAddThingTopo NotifyAddThingTopo()
 * @method QueryTopicRouteTable QueryTopicRouteTable()
 * @method CreateRule CreateRule()
 * @method QueryDeviceByTags QueryDeviceByTags()
 * @method DeleteTopicRouteTable DeleteTopicRouteTable()
 * @method QueryDeviceGroupInfo QueryDeviceGroupInfo()
 * @method DeleteDeviceFile DeleteDeviceFile()
 * @method BatchCheckDeviceNames BatchCheckDeviceNames()
 * @method QueryDevicePropertyData QueryDevicePropertyData()
 * @method RRpc RRpc()
 * @method CreateTopicRouteTable CreateTopicRouteTable()
 * @method InvokeThingsService InvokeThingsService()
 * @method QueryDeviceFileList QueryDeviceFileList()
 * @method QueryAppDeviceList QueryAppDeviceList()
 * @method CreateRuleAction CreateRuleAction()
 * @method BatchDeleteDeviceGroupRelations BatchDeleteDeviceGroupRelations()
 */
class V20180120
{
}

/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProps($props)
 * @method string getProps()
 */
class SaveDeviceProp extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
 * @method $this setTopicType($topicType)
 * @method int getTopicType()
 */
class UpdateRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setPropKey($propKey)
 * @method string getPropKey()
 */
class DeleteDeviceProp extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method array getIdentifier()
 */
class QueryDeviceDesiredProperty extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceGroupByDevice extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateProduct extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class GetDeviceStatus extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 */
class UpdateRuleAction extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class GetRuleAction extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetThingTopo extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ListProductTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class UpdateProductTopic extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteProduct extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class EnableThing extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductName($productName)
 * @method string getProductName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDataFormat($dataFormat)
 * @method int getDataFormat()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setProtocolType($protocolType)
 * @method string getProtocolType()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setJoinPermissionId($joinPermissionId)
 * @method string getJoinPermissionId()
 */
class CreateProduct extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceGroupTagList extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class RemoveThingTopo extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceGroupByTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceStatistics extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class DeleteRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setCount($count)
 * @method int getCount()
 */
class BatchRegisterDevice extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceServiceData extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class DeleteProductTopic extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class BatchRegisterDeviceWithApplyId extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class InvokeThingService extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicShortName($topicShortName)
 * @method string getTopicShortName()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setDesc($desc)
 * @method string getDesc()
 */
class CreateProductTopic extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class GetRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceListByDeviceGroup extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class UpdateProductTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSearchName($searchName)
 * @method string getSearchName()
 */
class ListRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDevicePropertyStatus extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTagKey($productTagKey)
 * @method array getProductTagKey()
 */
class DeleteProductTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class SetDeviceProperty extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DisableThing extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteDevice extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 * @method $this setVersions($versions)
 * @method string getVersions()
 */
class SetDeviceDesiredProperty extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StopRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setDevEui($devEui)
 * @method string getDevEui()
 * @method $this setPinCode($pinCode)
 * @method string getPinCode()
 * @method $this setNickname($nickname)
 * @method string getNickname()
 */
class RegisterDevice extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceEventData extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setGroupDesc($groupDesc)
 * @method string getGroupDesc()
 */
class CreateDeviceGroup extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceProp extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceNicknameInfo($deviceNicknameInfo)
 * @method array getDeviceNicknameInfo()
 */
class BatchUpdateDeviceNickname extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class DeleteRuleAction extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setItems($items)
 * @method string getItems()
 */
class SetDevicesProperty extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteDeviceGroup extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProduct extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class CreateProductTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicReverseRouteTable extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductTopic extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method array getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePropertiesData extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StartRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QuerySuperDeviceGroup extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class GetGatewayBySubDevice extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceDetail extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDevice($device)
 * @method array getDevice()
 */
class BatchAddDeviceGroupRelations extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setAliyunCommodityCode($aliyunCommodityCode)
 * @method string getAliyunCommodityCode()
 */
class QueryProductList extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFileId($fileId)
 * @method string getFileId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceFile extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSuperGroupId($superGroupId)
 * @method string getSuperGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceGroupList extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setTagString($tagString)
 * @method string getTagString()
 */
class SetDeviceGroupTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductTag($productTag)
 * @method array getProductTag()
 */
class ListProductByTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupDesc($groupDesc)
 * @method string getGroupDesc()
 */
class UpdateDeviceGroup extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryBatchRegisterDeviceStatus extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setIotId($iotId)
 * @method array getIotId()
 */
class BatchGetDeviceState extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
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
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class ListRuleActions extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceListStr($deviceListStr)
 * @method string getDeviceListStr()
 * @method $this setGwIotId($gwIotId)
 * @method string getGwIotId()
 * @method $this setGwProductKey($gwProductKey)
 * @method string getGwProductKey()
 * @method $this setGwDeviceName($gwDeviceName)
 * @method string getGwDeviceName()
 */
class NotifyAddThingTopo extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicRouteTable extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setTopicType($topicType)
 * @method int getTopicType()
 */
class CreateRule extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDeviceByTags extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSrcTopic($srcTopic)
 * @method string getSrcTopic()
 * @method $this setDstTopic($dstTopic)
 * @method array getDstTopic()
 */
class DeleteTopicRouteTable extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class QueryDeviceGroupInfo extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setFileId($fileId)
 * @method string getFileId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class DeleteDeviceFile extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class BatchCheckDeviceNames extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAsc($asc)
 * @method int getAsc()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDevicePropertyData extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setRequestBase64Byte($requestBase64Byte)
 * @method string getRequestBase64Byte()
 */
class RRpc extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setSrcTopic($srcTopic)
 * @method string getSrcTopic()
 * @method $this setDstTopic($dstTopic)
 * @method array getDstTopic()
 */
class CreateTopicRouteTable extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setIdentifier($identifier)
 * @method string getIdentifier()
 * @method $this setArgs($args)
 * @method string getArgs()
 */
class InvokeThingsService extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceFileList extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKeyList($productKeyList)
 * @method array getProductKeyList()
 * @method $this setCategoryKeyList($categoryKeyList)
 * @method array getCategoryKeyList()
 * @method $this setTagList($tagList)
 * @method array getTagList()
 * @method $this setAppKey($appKey)
 * @method string getAppKey()
 */
class QueryAppDeviceList extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 * @method $this setErrorActionFlag($errorActionFlag)
 * @method bool getErrorActionFlag()
 */
class CreateRuleAction extends Request
{
}/**
 * @method $this setIotInstanceId($iotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setDevice($device)
 * @method array getDevice()
 */
class BatchDeleteDeviceGroupRelations extends Request
{
}
