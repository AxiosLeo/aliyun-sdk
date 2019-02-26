<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 */
final class DescribeEipMonitorData extends VpcCommon
{
    public $action = 'DescribeEipMonitorData';
}
