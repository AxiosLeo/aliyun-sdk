<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAll($All)
 * @method boolean getAll()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setJobId($JobId)
 * @method array getJobId()
 * @method $this setJobReferenceId($JobReferenceId)
 * @method array getJobReferenceId()
 */
final class CancelJobs extends CCCCommon
{
    public $action = 'CancelJobs';
}
