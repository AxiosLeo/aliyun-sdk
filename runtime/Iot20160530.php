<?php

namespace aliyun\sdk\services\Iot20160530;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160530
 *
 * @package aliyun\sdk\services\Iot20160530
 * @method UpdateRule UpdateRule()
 * @method UpdateProduct UpdateProduct()
 * @method DeviceGrant DeviceGrant()
 * @method QueryApplyStatus QueryApplyStatus()
 * @method UpdateRuleAction UpdateRuleAction()
 * @method Sub Sub()
 * @method GetRuleAction GetRuleAction()
 * @method UpdateProductTopic UpdateProductTopic()
 * @method CreateProduct CreateProduct()
 * @method GetCats GetCats()
 * @method QueryPageByApplyId QueryPageByApplyId()
 * @method RegistDevice RegistDevice()
 * @method QueryProductByUserId QueryProductByUserId()
 * @method SubTopicFilter SubTopicFilter()
 * @method DeleteRule DeleteRule()
 * @method DeleteProductTopic DeleteProductTopic()
 * @method CreateProductTopic CreateProductTopic()
 * @method GetRule GetRule()
 * @method ListRule ListRule()
 * @method ServerOnline ServerOnline()
 * @method Pub Pub()
 * @method DeleteDevice DeleteDevice()
 * @method StopRule StopRule()
 * @method RevertRpc RevertRpc()
 * @method QueryDeviceTopic QueryDeviceTopic()
 * @method DeleteRuleAction DeleteRuleAction()
 * @method QueryProduct QueryProduct()
 * @method QueryProductTopic QueryProductTopic()
 * @method DevicePermitModify DevicePermitModify()
 * @method StartRule StartRule()
 * @method UnSub UnSub()
 * @method CheckTopicPermission CheckTopicPermission()
 * @method SaveServerCallback SaveServerCallback()
 * @method BatchGetDeviceState BatchGetDeviceState()
 * @method QueryDeviceByName QueryDeviceByName()
 * @method QueryDevice QueryDevice()
 * @method ListRuleActions ListRuleActions()
 * @method DeviceRevokeByTopic DeviceRevokeByTopic()
 * @method DebugRuleSql DebugRuleSql()
 * @method CreateRule CreateRule()
 * @method QueryServerCallback QueryServerCallback()
 * @method ListDevicePermits ListDevicePermits()
 * @method DeviceRevokeById DeviceRevokeById()
 * @method QueryTopic QueryTopic()
 * @method ApplyDeviceWithNames ApplyDeviceWithNames()
 * @method QueryDeviceById QueryDeviceById()
 * @method CreateRuleAction CreateRuleAction()
 */
class V20160530
{
}

/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
 */
class UpdateRule extends Request
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
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DeviceGrant extends Request
{

}/**
 * @method $this setApplyId($applyId)
 * @method int getApplyId()
 */
class QueryApplyStatus extends Request
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
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setCatId($catId)
 * @method int getCatId()
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
 * @method $this setCurrenPage($currenPage)
 * @method int getCurrenPage()
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
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class QueryProductByUserId extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setSubCallback($subCallback)
 * @method string getSubCallback()
 * @method $this setTopic($topic)
 * @method array getTopic()
 */
class SubTopicFilter extends Request
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
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class GetRule extends Request
{

}/**
 * @method $this setCurrenPage($currenPage)
 * @method int getCurrenPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRule extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 */
class ServerOnline extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
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
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StopRule extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setRpcContent($rpcContent)
 * @method string getRpcContent()
 * @method $this setTimeOut($timeOut)
 * @method int getTimeOut()
 */
class RevertRpc extends Request
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
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProduct extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 */
class QueryProductTopic extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DevicePermitModify extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 */
class StartRule extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setTopicList($topicList)
 * @method string getTopicList()
 * @method $this setTopic($topic)
 * @method array getTopic()
 */
class UnSub extends Request
{

}/**
 * @method $this setTopicOperation($topicOperation)
 * @method string getTopicOperation()
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 */
class CheckTopicPermission extends Request
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
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setTopicFullName($topicFullName)
 * @method string getTopicFullName()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setGrantType($grantType)
 * @method string getGrantType()
 */
class DeviceRevokeByTopic extends Request
{

}/**
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setJsonInfo($jsonInfo)
 * @method string getJsonInfo()
 */
class DebugRuleSql extends Request
{

}/**
 * @method $this setSelect($select)
 * @method string getSelect()
 * @method $this setShortTopic($shortTopic)
 * @method string getShortTopic()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRuleDesc($ruleDesc)
 * @method string getRuleDesc()
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
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class ListDevicePermits extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method int getProductKey()
 * @method $this setRuleId($ruleId)
 * @method int getRuleId()
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 */
class DeviceRevokeById extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setTopicName($topicName)
 * @method string getTopicName()
 */
class QueryTopic extends Request
{

}/**
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceName($deviceName)
 * @method array getDeviceName()
 */
class ApplyDeviceWithNames extends Request
{

}/**
 * @method $this setDeviceId($deviceId)
 * @method string getDeviceId()
 */
class QueryDeviceById extends Request
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