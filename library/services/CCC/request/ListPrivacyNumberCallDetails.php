<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setContactId($ContactId)
 * @method string getContactId()
 * @method $this setAgentId($AgentId)
 * @method string getAgentId()
 * @method $this setAgentName($AgentName)
 * @method string getAgentName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListPrivacyNumberCallDetails extends CCCCommon
{
    public $action = 'ListPrivacyNumberCallDetails';
}
