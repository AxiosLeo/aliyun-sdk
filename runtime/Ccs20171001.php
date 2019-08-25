<?php

namespace aliyun\sdk\services\Ccs20171001;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171001
 *
 * @package aliyun\sdk\services\Ccs20171001
 * @method QueryTicket QueryTicket()
 * @method QueryHotlineRecord QueryHotlineRecord()
 * @method GetHotlineRecord GetHotlineRecord()
 * @method ProceedTicket ProceedTicket()
 * @method CreateTicket CreateTicket()
 */
class V20171001
{
}

/**
 * @method $this setCcsInstanceId($ccsInstanceId)
 * @method string getCcsInstanceId()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setCreatorId($creatorId)
 * @method string getCreatorId()
 * @method $this setStage($stage)
 * @method string getStage()
 */
class QueryTicket extends Request
{
}/**
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setVisitorId($visitorId)
 * @method string getVisitorId()
 * @method $this setVisitorProvince($visitorProvince)
 * @method string getVisitorProvince()
 * @method $this setVisitorPhone($visitorPhone)
 * @method string getVisitorPhone()
 * @method $this setCallType($callType)
 * @method string getCallType()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMaxTalkDuration($maxTalkDuration)
 * @method int getMaxTalkDuration()
 * @method $this setMinTalkDuratoin($minTalkDuratoin)
 * @method int getMinTalkDuratoin()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setSatisfaction($satisfaction)
 * @method string getSatisfaction()
 * @method $this setCategoryIds($categoryIds)
 * @method string getCategoryIds()
 * @method $this setCcsInstanceId($ccsInstanceId)
 * @method string getCcsInstanceId()
 */
class QueryHotlineRecord extends Request
{
}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setCcsInstanceId($ccsInstanceId)
 * @method string getCcsInstanceId()
 */
class GetHotlineRecord extends Request
{
}/**
 * @method $this setCcsInstanceId($ccsInstanceId)
 * @method string getCcsInstanceId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setOperation($operation)
 * @method string getOperation()
 * @method $this setOperatorId($operatorId)
 * @method string getOperatorId()
 * @method $this setMemo($memo)
 * @method string getMemo()
 */
class ProceedTicket extends Request
{
}/**
 * @method $this setCcsInstanceId($ccsInstanceId)
 * @method string getCcsInstanceId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setCreatorId($creatorId)
 * @method string getCreatorId()
 * @method $this setCustomFields($customFields)
 * @method string getCustomFields()
 */
class CreateTicket extends Request
{
}
