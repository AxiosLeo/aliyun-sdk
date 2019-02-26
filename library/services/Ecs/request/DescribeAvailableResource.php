<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setDestinationResource($DestinationResource)
 * @method string getDestinationResource()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setIoOptimized($IoOptimized)
 * @method string getIoOptimized()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setSystemDiskCategory($SystemDiskCategory)
 * @method string getSystemDiskCategory()
 * @method $this setDataDiskCategory($DataDiskCategory)
 * @method string getDataDiskCategory()
 * @method $this setNetworkCategory($NetworkCategory)
 * @method string getNetworkCategory()
 * @method $this setCores($Cores)
 * @method integer getCores()
 * @method $this setMemory($Memory)
 * @method float getMemory()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setScope($Scope)
 * @method string getScope()
 */
final class DescribeAvailableResource extends EcsCommon
{
    public $action = 'DescribeAvailableResource';
}
