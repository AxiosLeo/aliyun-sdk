<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setHpcClusterId($HpcClusterId)
 * @method string getHpcClusterId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setName($Name)
 * @method string getName()
 */
final class ModifyHpcClusterAttribute extends EcsCommon
{
    public $action = 'ModifyHpcClusterAttribute';
}
