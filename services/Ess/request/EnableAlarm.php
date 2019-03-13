<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAlarmTaskId($AlarmTaskId)
 * @method string getAlarmTaskId()
 */
final class EnableAlarm extends EssCommon
{
    public $action = 'EnableAlarm';
}
