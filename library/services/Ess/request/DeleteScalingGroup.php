<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setForceDelete($ForceDelete)
 * @method boolean getForceDelete()
 */
final class DeleteScalingGroup extends EssCommon
{
    public $action = 'DeleteScalingGroup';
}
