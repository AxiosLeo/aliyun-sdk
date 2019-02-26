<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAgentId($AgentId)
 * @method string getAgentId()
 * @method $this setStartDate($StartDate)
 * @method string getStartDate()
 * @method $this setEndDate($EndDate)
 * @method string getEndDate()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GenerateAgentStatisticReport extends CCCCommon
{
    public $action = 'GenerateAgentStatisticReport';
}
