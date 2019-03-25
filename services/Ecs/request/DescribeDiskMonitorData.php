<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 */
final class DescribeDiskMonitorData extends EcsCommon
{
    public $action = 'DescribeDiskMonitorData';
}
