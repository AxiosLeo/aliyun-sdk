<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPublicIpAddress($PublicIpAddress)
 * @method string getPublicIpAddress()
 */
final class ReleasePublicIpAddress extends EcsCommon
{
    public $action = 'ReleasePublicIpAddress';
}
