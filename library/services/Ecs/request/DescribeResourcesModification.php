<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setMigrateAcrossZone($MigrateAcrossZone)
 * @method boolean getMigrateAcrossZone()
 * @method $this setDestinationResource($DestinationResource)
 * @method string getDestinationResource()
 * @method $this setOperationType($OperationType)
 * @method string getOperationType()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setCores($Cores)
 * @method integer getCores()
 * @method $this setMemory($Memory)
 * @method float getMemory()
 */
final class DescribeResourcesModification extends EcsCommon
{
    public $action = 'DescribeResourcesModification';
}
