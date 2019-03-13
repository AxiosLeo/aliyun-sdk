<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setStopTime($StopTime)
 * @method integer getStopTime()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCriteria($Criteria)
 * @method string getCriteria()
 */
final class ListRecentCallRecords extends CCCCommon
{
    public $action = 'ListRecentCallRecords';
}
