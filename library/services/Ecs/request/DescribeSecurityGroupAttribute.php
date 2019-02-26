<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNicType($NicType)
 * @method string getNicType()
 * @method $this setDirection($Direction)
 * @method string getDirection()
 */
final class DescribeSecurityGroupAttribute extends EcsCommon
{
    public $action = 'DescribeSecurityGroupAttribute';
}
