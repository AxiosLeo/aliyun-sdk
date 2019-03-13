<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DeletePhysicalConnection extends EcsCommon
{
    public $action = 'DeletePhysicalConnection';
}
