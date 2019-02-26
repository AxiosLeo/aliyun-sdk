<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setContactId($ContactId)
 * @method string getContactId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setStopTime($StopTime)
 * @method integer getStopTime()
 * @method $this setCallingNumber($CallingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($CalledNumber)
 * @method string getCalledNumber()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListIvrTrackingDetail extends CCCCommon
{
    public $action = 'ListIvrTrackingDetail';
}
