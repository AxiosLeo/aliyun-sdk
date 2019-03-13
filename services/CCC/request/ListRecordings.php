<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setStopTime($StopTime)
 * @method integer getStopTime()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 * @method $this setAgentId($AgentId)
 * @method string getAgentId()
 * @method $this setCriteria($Criteria)
 * @method string getCriteria()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListRecordings extends CCCCommon
{
    public $action = 'ListRecordings';
}
