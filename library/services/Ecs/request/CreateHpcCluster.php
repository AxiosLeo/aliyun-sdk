<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setName($Name)
 * @method string getName()
 */
final class CreateHpcCluster extends EcsCommon
{
    public $action = 'CreateHpcCluster';
}
