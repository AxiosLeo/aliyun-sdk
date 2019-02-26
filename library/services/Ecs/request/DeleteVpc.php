<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteVpc extends EcsCommon
{
    public $action = 'DeleteVpc';
}
