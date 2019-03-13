<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setSuccessConfig($SuccessConfig)
 * @method integer getSuccessConfig()
 * @method $this setFailConfig($FailConfig)
 * @method integer getFailConfig()
 * @method $this setRejectConfig($RejectConfig)
 * @method integer getRejectConfig()
 */
final class ModifyAlertConfig extends EssCommon
{
    public $action = 'ModifyAlertConfig';
}
