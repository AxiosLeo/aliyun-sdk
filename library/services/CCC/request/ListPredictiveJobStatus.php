<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($JobGroupId)
 * @method string getJobGroupId()
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
final class ListPredictiveJobStatus extends CCCCommon
{
    public $action = 'ListPredictiveJobStatus';
}
