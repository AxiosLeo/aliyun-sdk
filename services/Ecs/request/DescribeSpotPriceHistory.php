<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setOSType($OSType)
 * @method string getOSType()
 * @method $this setOffset($Offset)
 * @method integer getOffset()
 */
final class DescribeSpotPriceHistory extends EcsCommon
{
    public $action = 'DescribeSpotPriceHistory';
}
