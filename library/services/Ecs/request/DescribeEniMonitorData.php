<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setEniId($EniId)
 * @method string getEniId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 */
final class DescribeEniMonitorData extends EcsCommon
{
    public $action = 'DescribeEniMonitorData';
}
