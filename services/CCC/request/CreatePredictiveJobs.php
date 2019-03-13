<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method string getSkillGroupId()
 * @method $this setStrategyJson($StrategyJson)
 * @method string getStrategyJson()
 * @method $this setJobsJson($JobsJson)
 * @method array getJobsJson()
 */
final class CreatePredictiveJobs extends CCCCommon
{
    public $action = 'CreatePredictiveJobs';
}
