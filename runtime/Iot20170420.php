<?php

namespace aliyun\sdk\services\Iot20170420;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170420
 *
 * @package aliyun\sdk\services\Iot20170420
 * @method SaveDeviceProp SaveDeviceProp()
 * @method UpdateRule UpdateRule()
 * @method DeleteDeviceProp DeleteDeviceProp()
 * @method UpdateDeviceShadow UpdateDeviceShadow()
 * @method UpdateProduct UpdateProduct()
 * @method QueryDeviceSession QueryDeviceSession()
 * @method SaveUserServeStatus SaveUserServeStatus()
 * @method DeleteMq DeleteMq()
 * @method QueryApplyStatus QueryApplyStatus()
 * @method doCheckResource doCheckResource()
 * @method QueryUserServeStatus QueryUserServeStatus()
 * @method UpdateRuleAction UpdateRuleAction()
 * @method GetRuleAction GetRuleAction()
 * @method UpdateProductTopic UpdateProductTopic()
 * @method DeleteProductTopicByProductKey DeleteProductTopicByProductKey()
 * @method DeleteProduct DeleteProduct()
 * @method CreateProduct CreateProduct()
 * @method EnableSubDevice EnableSubDevice()
 * @method QueryServeList QueryServeList()
 * @method doPhysicalDeleteResource doPhysicalDeleteResource()
 * @method GetCats GetCats()
 * @method QueryServeById QueryServeById()
 * @method GetC2CConfig GetC2CConfig()
 * @method QueryPageByApplyId QueryPageByApplyId()
 * @method RevokeInstance RevokeInstance()
 * @method RegistDevice RegistDevice()
 * @method QueryProductByUserId QueryProductByUserId()
 * @method DeleteRule DeleteRule()
 * @method DeleteProductTopic DeleteProductTopic()
 * @method CreateProductTopic CreateProductTopic()
 * @method GetDeviceShadow GetDeviceShadow()
 * @method GetRule GetRule()
 * @method ListRule ListRule()
 * @method Pub Pub()
 * @method DeleteDevice DeleteDevice()
 * @method DisableSubDevice DisableSubDevice()
 * @method doLogicalDeleteResource doLogicalDeleteResource()
 * @method StopRule StopRule()
 * @method QueryDeviceDetails QueryDeviceDetails()
 * @method RamAuth RamAuth()
 * @method QueryDeviceProp QueryDeviceProp()
 * @method QueryDeviceTopic QueryDeviceTopic()
 * @method DeleteRuleAction DeleteRuleAction()
 * @method GetVpcInstanceMapping GetVpcInstanceMapping()
 * @method DisableDevice DisableDevice()
 * @method CreateMq CreateMq()
 * @method UpdateC2CConfig UpdateC2CConfig()
 * @method QuerySubDeviceList QuerySubDeviceList()
 * @method QueryProduct QueryProduct()
 * @method QueryTopicReverseRouteTable QueryTopicReverseRouteTable()
 * @method QueryProductTopic QueryProductTopic()
 * @method StartRule StartRule()
 * @method DeleteSubDevice DeleteSubDevice()
 * @method EnableDevice EnableDevice()
 * @method GetDeviceProp GetDeviceProp()
 * @method SaveServerCallback SaveServerCallback()
 * @method BatchGetDeviceState BatchGetDeviceState()
 * @method PubBroadcast PubBroadcast()
 * @method QueryDeviceByName QueryDeviceByName()
 * @method QueryDevice QueryDevice()
 * @method ListRuleActions ListRuleActions()
 * @method SetDeviceProp SetDeviceProp()
 * @method DebugRuleSql DebugRuleSql()
 * @method QueryTopicRouteTable QueryTopicRouteTable()
 * @method CreateRule CreateRule()
 * @method QueryServerCallback QueryServerCallback()
 * @method DeleteTopicRouteTable DeleteTopicRouteTable()
 * @method ApplyDeviceWithNames ApplyDeviceWithNames()
 * @method RRpc RRpc()
 * @method CreateTopicRouteTable CreateTopicRouteTable()
 * @method GetMqInfo GetMqInfo()
 * @method QueryDeviceById QueryDeviceById()
 * @method GrantInstance GrantInstance()
 * @method GetServerMapping GetServerMapping()
 * @method QueryTenant QueryTenant()
 * @method GetVpcServerMapping GetVpcServerMapping()
 * @method CreateRuleAction CreateRuleAction()
 */
class V20170420
{
}

/**
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
 */
class UpdateRule extends Request
{

}/**
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
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
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
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class QueryDeviceSession extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServeId($serveId)
 * @method int getServeId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class SaveUserServeStatus extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteMq extends Request
{

}/**
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryApplyStatus extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setLevel($level)
 * @method int getLevel()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 */
class doCheckResource extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServeId($serveId)
 * @method int getServeId()
 */
class QueryUserServeStatus extends Request
{

}/**
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
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class GetRuleAction extends Request
{

}/**
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
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteProductTopicByProductKey extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteProduct extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNodeType($nodeType)
 * @method int getNodeType()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setCatId($catId)
 * @method int getCatId()
 * @method $this setExtProps($extProps)
 * @method string getExtProps()
 * @method $this setSecurityPolicy($securityPolicy)
 * @method string getSecurityPolicy()
 * @method $this setId2($id2)
 * @method bool getId2()
 * @method $this setPayType($payType)
 * @method int getPayType()
 */
class CreateProduct extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class EnableSubDevice extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExclusionServe($exclusionServe)
 * @method array getExclusionServe()
 */
class QueryServeList extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class doPhysicalDeleteResource extends Request
{

}/**
 * @method $this setRootId($rootId)
 * @method int getRootId()
 */
class GetCats extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServeId($serveId)
 * @method int getServeId()
 */
class QueryServeById extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetC2CConfig extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 */
class RevokeInstance extends Request
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
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryProductByUserId extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class DeleteRule extends Request
{

}/**
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class DeleteProductTopic extends Request
{

}/**
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
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class GetRule extends Request
{

}/**
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRule extends Request
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
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class DeleteDevice extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DisableSubDevice extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class doLogicalDeleteResource extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StopRule extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceDetails extends Request
{

}/**
 */
class RamAuth extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryDeviceProp extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class QueryDeviceTopic extends Request
{

}/**
 * @method $this setActionId($actionId)
 * @method int getActionId()
 */
class DeleteRuleAction extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 */
class GetVpcInstanceMapping extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DisableDevice extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class CreateMq extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setMessageType($messageType)
 * @method int getMessageType()
 */
class UpdateC2CConfig extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setSubDeviceName($subDeviceName)
 * @method string getSubDeviceName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QuerySubDeviceList extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProduct extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicReverseRouteTable extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductTopic extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StartRule extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeleteSubDevice extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class EnableDevice extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetDeviceProp extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setMnsConfiguration($mnsConfiguration)
 * @method string getMnsConfiguration()
 * @method $this setCallbackType($callbackType)
 * @method int getCallbackType()
 */
class SaveServerCallback extends Request
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
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class ListRuleActions extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setProps($props)
 * @method string getProps()
 */
class SetDeviceProp extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setJsonInfo($jsonInfo)
 * @method string getJsonInfo()
 */
class DebugRuleSql extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopic($topic)
 * @method string getTopic()
 */
class QueryTopicRouteTable extends Request
{

}/**
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
 */
class CreateRule extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryServerCallback extends Request
{

}/**
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
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class ApplyDeviceWithNames extends Request
{

}/**
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
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class GetMqInfo extends Request
{

}/**
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class QueryDeviceById extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstancePort($instancePort)
 * @method string getInstancePort()
 */
class GrantInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class GetServerMapping extends Request
{

}/**
 */
class QueryTenant extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class GetVpcServerMapping extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfiguration($configuration)
 * @method string getConfiguration()
 */
class CreateRuleAction extends Request
{

}