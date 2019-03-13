<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 */
final class DetachKeyPair extends EcsCommon
{
    public $action = 'DetachKeyPair';
}
