<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setJobInstanceId($JobInstanceId)
 * @method string getJobInstanceId()
 */
final class KillFlowJob extends EmrCommon
{
    public $action = 'KillFlowJob';
}
