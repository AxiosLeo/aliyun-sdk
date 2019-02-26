<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class KillExecutionPlanInstance extends EmrCommon
{
    public $action = 'KillExecutionPlanInstance';
}
