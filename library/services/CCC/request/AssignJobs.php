<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($StrategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($CallingNumber)
 * @method array getCallingNumber()
 * @method $this setJobsJson($JobsJson)
 * @method array getJobsJson()
 */
final class AssignJobs extends CCCCommon
{
    public $action = 'AssignJobs';
}
