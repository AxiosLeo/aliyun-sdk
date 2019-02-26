<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScheduledTaskId($ScheduledTaskId)
 * @method string getScheduledTaskId()
 */
final class DeleteScheduledTask extends EssCommon
{
    public $action = 'DeleteScheduledTask';
}
