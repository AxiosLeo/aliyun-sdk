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
 * @method $this setRemovePolicy($RemovePolicy)
 * @method string getRemovePolicy()
 */
final class RemoveInstances extends EssCommon
{
    public $action = 'RemoveInstances';
}
