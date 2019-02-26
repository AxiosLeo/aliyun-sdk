<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setPublicKeyBody($PublicKeyBody)
 * @method string getPublicKeyBody()
 */
final class ImportKeyPair extends EcsCommon
{
    public $action = 'ImportKeyPair';
}
