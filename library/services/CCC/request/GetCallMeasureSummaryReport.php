<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIntervalType($IntervalType)
 * @method string getIntervalType()
 * @method $this setYear($Year)
 * @method integer getYear()
 * @method $this setMonth($Month)
 * @method integer getMonth()
 * @method $this setDay($Day)
 * @method integer getDay()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetCallMeasureSummaryReport extends CCCCommon
{
    public $action = 'GetCallMeasureSummaryReport';
}
