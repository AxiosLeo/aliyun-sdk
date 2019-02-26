<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setIpAddress($IpAddress)
 * @method string getIpAddress()
 * @method $this setVlanId($VlanId)
 * @method string getVlanId()
 */
final class AllocatePublicIpAddress extends EcsCommon
{
    public $action = 'AllocatePublicIpAddress';
}
