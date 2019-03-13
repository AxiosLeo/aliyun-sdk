<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStartDay($StartDay)
 * @method integer getStartDay()
 * @method $this setSustainDays($SustainDays)
 * @method integer getSustainDays()
 */
final class QueryMeasureSummary extends IotCommon
{
    public $action = 'QueryMeasureSummary';
}
