<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setTimeAlignment($TimeAlignment)
 * @method string getTimeAlignment()
 * @method $this setContactName($ContactName)
 * @method string getContactName()
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListJobStatus extends CCCCommon
{
    public $action = 'ListJobStatus';
}
