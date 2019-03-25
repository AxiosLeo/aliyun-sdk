<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDiskId($DiskId)
 * @method array getDiskId()
 * @method $this setEventId($EventId)
 * @method array getEventId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setHealthStatus($HealthStatus)
 * @method string getHealthStatus()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setEventTime_Start($EventTime_Start)
 * @method string getEventTime_Start()
 * @method $this setEventTime_End($EventTime_End)
 * @method string getEventTime_End()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeDisksFullStatus extends EcsCommon
{
    public $action = 'DescribeDisksFullStatus';
}
