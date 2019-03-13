<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class DetachNetworkInterface extends EcsCommon
{
    public $action = 'DetachNetworkInterface';
}
