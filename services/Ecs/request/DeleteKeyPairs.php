<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setKeyPairNames($KeyPairNames)
 * @method string getKeyPairNames()
 */
final class DeleteKeyPairs extends EcsCommon
{
    public $action = 'DeleteKeyPairs';
}
