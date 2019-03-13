<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStartDay($StartDay)
 * @method integer getStartDay()
 * @method $this setSustainDays($SustainDays)
 * @method integer getSustainDays()
 * @method $this setTopCount($TopCount)
 * @method integer getTopCount()
 */
final class QueryMeasureTop extends IotCommon
{
    public $action = 'QueryMeasureTop';
}
