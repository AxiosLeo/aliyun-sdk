<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setCsbId($CsbId)
 * @method integer getCsbId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class FindServiceStatisticalData extends CSBCommon
{
    public $action = 'FindServiceStatisticalData';
}
