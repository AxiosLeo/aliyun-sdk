<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 */
final class ExitStandby extends EssCommon
{
    public $action = 'ExitStandby';
}
