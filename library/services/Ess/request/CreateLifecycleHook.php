<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setLifecycleHookName($LifecycleHookName)
 * @method string getLifecycleHookName()
 * @method $this setLifecycleTransition($LifecycleTransition)
 * @method string getLifecycleTransition()
 * @method $this setDefaultResult($DefaultResult)
 * @method string getDefaultResult()
 * @method $this setHeartbeatTimeout($HeartbeatTimeout)
 * @method integer getHeartbeatTimeout()
 * @method $this setNotificationMetadata($NotificationMetadata)
 * @method string getNotificationMetadata()
 * @method $this setNotificationArn($NotificationArn)
 * @method string getNotificationArn()
 * @method $this setLifecycleHook($LifecycleHook)
 * @method array getLifecycleHook()
 */
final class CreateLifecycleHook extends EssCommon
{
    public $action = 'CreateLifecycleHook';
}
