<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setScheduledTaskName($ScheduledTaskName)
 * @method string getScheduledTaskName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setScheduledAction($ScheduledAction)
 * @method string getScheduledAction()
 * @method $this setRecurrenceEndTime($RecurrenceEndTime)
 * @method string getRecurrenceEndTime()
 * @method $this setLaunchTime($LaunchTime)
 * @method string getLaunchTime()
 * @method $this setRecurrenceType($RecurrenceType)
 * @method string getRecurrenceType()
 * @method $this setRecurrenceValue($RecurrenceValue)
 * @method string getRecurrenceValue()
 * @method $this setTaskEnabled($TaskEnabled)
 * @method boolean getTaskEnabled()
 * @method $this setLaunchExpirationTime($LaunchExpirationTime)
 * @method integer getLaunchExpirationTime()
 */
final class CreateScheduledTask extends EssCommon
{
    public $action = 'CreateScheduledTask';
}
