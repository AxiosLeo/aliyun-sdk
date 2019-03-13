<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setNotificationArn($NotificationArn)
 * @method string getNotificationArn()
 * @method $this setNotificationType($NotificationType)
 * @method array getNotificationType()
 */
final class ModifyNotificationConfiguration extends EssCommon
{
    public $action = 'ModifyNotificationConfiguration';
}
