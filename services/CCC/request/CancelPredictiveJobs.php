<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAll($All)
 * @method boolean getAll()
 * @method $this setJobGroupId($JobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobId($JobId)
 * @method array getJobId()
 */
final class CancelPredictiveJobs extends CCCCommon
{
    public $action = 'CancelPredictiveJobs';
}
