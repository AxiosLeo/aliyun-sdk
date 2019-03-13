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
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setOperationType($OperationType)
 * @method string getOperationType()
 */
final class DescribeBandwidthLimitation extends EcsCommon
{
    public $action = 'DescribeBandwidthLimitation';
}
