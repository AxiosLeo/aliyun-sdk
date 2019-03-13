<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobInstanceId($JobInstanceId)
 * @method string getJobInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class KillExecutionJobInstance extends EmrCommon
{
    public $action = 'KillExecutionJobInstance';
}
