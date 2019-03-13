<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setArguments($Arguments)
 * @method string getArguments()
 * @method $this setRerunFail($RerunFail)
 * @method boolean getRerunFail()
 */
final class RetryExecutionPlanInstance extends EmrCommon
{
    public $action = 'RetryExecutionPlanInstance';
}
