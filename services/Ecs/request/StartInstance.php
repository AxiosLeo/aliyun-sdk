<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInitLocalDisk($InitLocalDisk)
 * @method boolean getInitLocalDisk()
 */
final class StartInstance extends EcsCommon
{
    public $action = 'StartInstance';
}
