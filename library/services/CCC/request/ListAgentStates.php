<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($AgentIds)
 * @method string getAgentIds()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListAgentStates extends CCCCommon
{
    public $action = 'ListAgentStates';
}
