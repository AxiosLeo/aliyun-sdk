<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLifecycleHookId($LifecycleHookId)
 * @method string getLifecycleHookId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setLifecycleHookName($LifecycleHookName)
 * @method string getLifecycleHookName()
 */
final class DeleteLifecycleHook extends EssCommon
{
    public $action = 'DeleteLifecycleHook';
}
