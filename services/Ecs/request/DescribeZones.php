<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVerbose($Verbose)
 * @method boolean getVerbose()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 */
final class DescribeZones extends EcsCommon
{
    public $action = 'DescribeZones';
}
