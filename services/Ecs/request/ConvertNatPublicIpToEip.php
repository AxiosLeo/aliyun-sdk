<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ConvertNatPublicIpToEip extends EcsCommon
{
    public $action = 'ConvertNatPublicIpToEip';
}
