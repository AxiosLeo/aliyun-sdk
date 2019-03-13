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
 * @method $this setDefaultResult($DefaultResult)
 * @method string getDefaultResult()
 * @method $this setHeartbeatTimeout($HeartbeatTimeout)
 * @method integer getHeartbeatTimeout()
 * @method $this setLifecycleTransition($LifecycleTransition)
 * @method string getLifecycleTransition()
 * @method $this setNotificationMetadata($NotificationMetadata)
 * @method string getNotificationMetadata()
 * @method $this setNotificationArn($NotificationArn)
 * @method string getNotificationArn()
 */
final class ModifyLifecycleHook extends EssCommon
{
    public $action = 'ModifyLifecycleHook';
}
