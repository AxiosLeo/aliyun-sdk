<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setStrategy($Strategy)
 * @method string getStrategy()
 * @method $this setTimeInterval($TimeInterval)
 * @method integer getTimeInterval()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setTimeUnit($TimeUnit)
 * @method string getTimeUnit()
 * @method $this setDayOfWeek($DayOfWeek)
 * @method string getDayOfWeek()
 * @method $this setDayOfMonth($DayOfMonth)
 * @method string getDayOfMonth()
 */
final class ModifyExecutionPlanScheduleInfo extends EmrCommon
{
    public $action = 'ModifyExecutionPlanScheduleInfo';
}
