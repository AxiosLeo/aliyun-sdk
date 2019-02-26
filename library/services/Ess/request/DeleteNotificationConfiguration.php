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
 */
final class DeleteNotificationConfiguration extends EssCommon
{
    public $action = 'DeleteNotificationConfiguration';
}
