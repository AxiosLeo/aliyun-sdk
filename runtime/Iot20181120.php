<?php

namespace aliyun\sdk\services\Iot20181120;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20181120
 *
 * @package aliyun\sdk\services\Iot20181120
 * @method RemoveThing RemoveThing()
 * @method QuerySpaceInfoByIds QuerySpaceInfoByIds()
 * @method CreateRootSpace CreateRootSpace()
 * @method QueryEvent QueryEvent()
 * @method BindEventTriggerRules BindEventTriggerRules()
 * @method UpdateSpaceStatus UpdateSpaceStatus()
 * @method QuerySignList QuerySignList()
 * @method QuerySpaceByBusinessId QuerySpaceByBusinessId()
 * @method CreateEvent CreateEvent()
 * @method RegisterEventHandler RegisterEventHandler()
 * @method CreateSpace CreateSpace()
 * @method UpdateDeviceExt UpdateDeviceExt()
 * @method DeleteEvent DeleteEvent()
 * @method DeleteEventType DeleteEventType()
 * @method BatchSendSMS BatchSendSMS()
 * @method QueryChildSpaceInfoBy QueryChildSpaceInfoBy()
 * @method CountEventType CountEventType()
 * @method QueryRootSpaceInfoByAddr QueryRootSpaceInfoByAddr()
 * @method TriggerEvent TriggerEvent()
 * @method CreateSpaceRelation CreateSpaceRelation()
 * @method UpdateSpace UpdateSpace()
 * @method BindDevice2Space BindDevice2Space()
 * @method QueryEventById QueryEventById()
 * @method QueryTemplateList QueryTemplateList()
 * @method QueryEventTypeById QueryEventTypeById()
 * @method RemoveSpace RemoveSpace()
 * @method UnBindDeviceFromSpace UnBindDeviceFromSpace()
 * @method CountEvent CountEvent()
 * @method UpdateEventRecordStatus UpdateEventRecordStatus()
 * @method UpdateEvent UpdateEvent()
 * @method QueryEventType QueryEventType()
 * @method QuerySpaceByRelationIds QuerySpaceByRelationIds()
 * @method QueryRelationsInInAllSpace QueryRelationsInInAllSpace()
 * @method UpdateEventType UpdateEventType()
 * @method GetTemplateDetail GetTemplateDetail()
 * @method QueryEventRecord QueryEventRecord()
 * @method QueryRelationsInSpace QueryRelationsInSpace()
 * @method AuthorizeMessageService AuthorizeMessageService()
 * @method CreateEventType CreateEventType()
 * @method RemoveSpaceRelation RemoveSpaceRelation()
 * @method RegisterSMSServiceMetadata RegisterSMSServiceMetadata()
 * @method RegisterDeviceExt RegisterDeviceExt()
 * @method QueryDeviceDetailExt QueryDeviceDetailExt()
 * @method QueryEventRecordById QueryEventRecordById()
 * @method QueryChildSpaceInfo QueryChildSpaceInfo()
 * @method QueryEventHandlerByEventId QueryEventHandlerByEventId()
 * @method QueryDeviceListBySpace QueryDeviceListBySpace()
 * @method CountEventRecord CountEventRecord()
 * @method UnregisterEventHandler UnregisterEventHandler()
 * @method QueryAllChildSpaceBy QueryAllChildSpaceBy()
 */
class V20181120
{
}

/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setThingId($thingId)
 * @method string getThingId()
 */
class RemoveThing extends Request
{

}/**
 * @method $this setSpaceIds($spaceIds)
 * @method array getSpaceIds()
 */
class QuerySpaceInfoByIds extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setBusinessId($businessId)
 * @method string getBusinessId()
 * @method $this setGeo($geo)
 * @method string getGeo()
 * @method $this setSpaceName($spaceName)
 * @method string getSpaceName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTypeCode($typeCode)
 * @method string getTypeCode()
 * @method $this setUsesCode($usesCode)
 * @method string getUsesCode()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setSpaceScope($spaceScope)
 * @method int getSpaceScope()
 * @method $this setAttribute($attribute)
 * @method string getAttribute()
 * @method $this setChildSpace($childSpace)
 * @method array getChildSpace()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 */
class CreateRootSpace extends Request
{

}/**
 * @method $this setOrderType($orderType)
 * @method int getOrderType()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 */
class QueryEvent extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setTriggerRuleId($triggerRuleId)
 * @method string getTriggerRuleId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class BindEventTriggerRules extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 */
class UpdateSpaceStatus extends Request
{

}/**
 * @method $this setAccessCode($accessCode)
 * @method string getAccessCode()
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QuerySignList extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setBusinessId($businessId)
 * @method string getBusinessId()
 */
class QuerySpaceByBusinessId extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setEventTriggerRuleId($eventTriggerRuleId)
 * @method string getEventTriggerRuleId()
 * @method $this setExtraInfo($extraInfo)
 * @method string getExtraInfo()
 * @method $this setName($name)
 * @method string getName()
 */
class CreateEvent extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPara($para)
 * @method string getPara()
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class RegisterEventHandler extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setParentSpaceId($parentSpaceId)
 * @method string getParentSpaceId()
 * @method $this setBusinessId($businessId)
 * @method string getBusinessId()
 * @method $this setGeo($geo)
 * @method string getGeo()
 * @method $this setSpaceName($spaceName)
 * @method string getSpaceName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTypeCode($typeCode)
 * @method string getTypeCode()
 * @method $this setUsesCode($usesCode)
 * @method string getUsesCode()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setSpaceScope($spaceScope)
 * @method int getSpaceScope()
 * @method $this setAttribute($attribute)
 * @method string getAttribute()
 * @method $this setChildSpace($childSpace)
 * @method array getChildSpace()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 */
class CreateSpace extends Request
{

}/**
 * @method $this setNickName($nickName)
 * @method string getNickName()
 * @method $this setProps($props)
 * @method string getProps()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class UpdateDeviceExt extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class DeleteEvent extends Request
{

}/**
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class DeleteEventType extends Request
{

}/**
 * @method $this setAccessCode($accessCode)
 * @method string getAccessCode()
 * @method $this setPhoneNumList($phoneNumList)
 * @method array getPhoneNumList()
 * @method $this setParamsJsonStr($paramsJsonStr)
 * @method string getParamsJsonStr()
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 */
class BatchSendSMS extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setTypeCode($typeCode)
 * @method string getTypeCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setUsesCode($usesCode)
 * @method string getUsesCode()
 * @method $this setStatus($status)
 * @method int getStatus()
 */
class QueryChildSpaceInfoBy extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setOnlyRoot($onlyRoot)
 * @method int getOnlyRoot()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 */
class CountEventType extends Request
{

}/**
 * @method $this setQueryDTO($queryDTO)
 * @method string getQueryDTO()
 */
class QueryRootSpaceInfoByAddr extends Request
{

}/**
 * @method $this setTriggerRuleId($triggerRuleId)
 * @method string getTriggerRuleId()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class TriggerEvent extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setRelationType($relationType)
 * @method string getRelationType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setObjectDTOList($objectDTOList)
 * @method array getObjectDTOList()
 */
class CreateSpaceRelation extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBusinessId($businessId)
 * @method string getBusinessId()
 * @method $this setUsesCode($usesCode)
 * @method string getUsesCode()
 * @method $this setAttribute($attribute)
 * @method string getAttribute()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setName($name)
 * @method string getName()
 */
class UpdateSpace extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setIotId($iotId)
 * @method string getIotId()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setModel($model)
 * @method string getModel()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class BindDevice2Space extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class QueryEventById extends Request
{

}/**
 * @method $this setAccessCode($accessCode)
 * @method string getAccessCode()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTemplateList extends Request
{

}/**
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class QueryEventTypeById extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 */
class RemoveSpace extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setOperatorType($operatorType)
 * @method string getOperatorType()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setThingId($thingId)
 * @method string getThingId()
 */
class UnBindDeviceFromSpace extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 */
class CountEvent extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setEventRecordId($eventRecordId)
 * @method int getEventRecordId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class UpdateEventRecordStatus extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setExtraInfo($extraInfo)
 * @method string getExtraInfo()
 */
class UpdateEvent extends Request
{

}/**
 * @method $this setOrderType($orderType)
 * @method int getOrderType()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setOnlyRoot($onlyRoot)
 * @method int getOnlyRoot()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 */
class QueryEventType extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setRelObjectIdList($relObjectIdList)
 * @method array getRelObjectIdList()
 */
class QuerySpaceByRelationIds extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setRelationType($relationType)
 * @method string getRelationType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryRelationsInInAllSpace extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIcon($icon)
 * @method string getIcon()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setModifier($modifier)
 * @method string getModifier()
 * @method $this setLevel($level)
 * @method string getLevel()
 */
class UpdateEventType extends Request
{

}/**
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 * @method $this setAccessCode($accessCode)
 * @method string getAccessCode()
 */
class GetTemplateDetail extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setEventIdList($eventIdList)
 * @method array getEventIdList()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setOrderType($orderType)
 * @method int getOrderType()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLimit($limit)
 * @method int getLimit()
 */
class QueryEventRecord extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setRelationType($relationType)
 * @method string getRelationType()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setName($name)
 * @method string getName()
 */
class QueryRelationsInSpace extends Request
{

}/**
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setChannelCode($channelCode)
 * @method string getChannelCode()
 * @method $this setMessageResources($messageResources)
 * @method array getMessageResources()
 */
class AuthorizeMessageService extends Request
{

}/**
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setIcon($icon)
 * @method string getIcon()
 * @method $this setCreator($creator)
 * @method string getCreator()
 * @method $this setModifier($modifier)
 * @method string getModifier()
 */
class CreateEventType extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setRelationIdList($relationIdList)
 * @method array getRelationIdList()
 */
class RemoveSpaceRelation extends Request
{

}/**
 * @method $this setUid($uid)
 * @method int getUid()
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setName($name)
 * @method string getName()
 */
class RegisterSMSServiceMetadata extends Request
{

}/**
 * @method $this setDeviceName($deviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setNickName($nickName)
 * @method string getNickName()
 * @method $this setProps($props)
 * @method string getProps()
 */
class RegisterDeviceExt extends Request
{

}/**
 * @method $this setIotId($iotId)
 * @method string getIotId()
 */
class QueryDeviceDetailExt extends Request
{

}/**
 * @method $this setEventRecordId($eventRecordId)
 * @method int getEventRecordId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class QueryEventRecordById extends Request
{

}/**
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 */
class QueryChildSpaceInfo extends Request
{

}/**
 * @method $this setEventId($eventId)
 * @method int getEventId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class QueryEventHandlerByEventId extends Request
{

}/**
 * @method $this setDeviceNameLike($deviceNameLike)
 * @method string getDeviceNameLike()
 * @method $this setNicknameLike($nicknameLike)
 * @method string getNicknameLike()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setSpacePathLike($spacePathLike)
 * @method string getSpacePathLike()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProductKey($productKey)
 * @method string getProductKey()
 * @method $this setDeviceStatus($deviceStatus)
 * @method array getDeviceStatus()
 * @method $this setSpaceId($spaceId)
 * @method array getSpaceId()
 * @method $this setModel($model)
 * @method string getModel()
 * @method $this setIotId($iotId)
 * @method array getIotId()
 */
class QueryDeviceListBySpace extends Request
{

}/**
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setEventTypeId($eventTypeId)
 * @method int getEventTypeId()
 * @method $this setEventIdList($eventIdList)
 * @method array getEventIdList()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class CountEventRecord extends Request
{

}/**
 * @method $this setEventHandlerId($eventHandlerId)
 * @method int getEventHandlerId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 */
class UnregisterEventHandler extends Request
{

}/**
 * @method $this setRootSpaceId($rootSpaceId)
 * @method string getRootSpaceId()
 * @method $this setScopeId($scopeId)
 * @method string getScopeId()
 * @method $this setSpaceId($spaceId)
 * @method string getSpaceId()
 * @method $this setTypeCode($typeCode)
 * @method string getTypeCode()
 * @method $this setTypeTag($typeTag)
 * @method string getTypeTag()
 * @method $this setTypeTagExclude($typeTagExclude)
 * @method string getTypeTagExclude()
 * @method $this setTypeCodeList($typeCodeList)
 * @method array getTypeCodeList()
 * @method $this setSpaceName($spaceName)
 * @method string getSpaceName()
 * @method $this setNameLike($nameLike)
 * @method string getNameLike()
 * @method $this setUsesCode($usesCode)
 * @method string getUsesCode()
 * @method $this setAttributes($attributes)
 * @method string getAttributes()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryAllChildSpaceBy extends Request
{

}