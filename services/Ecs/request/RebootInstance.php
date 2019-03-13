<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setForceStop($ForceStop)
 * @method boolean getForceStop()
 */
final class RebootInstance extends EcsCommon
{
    public $action = 'RebootInstance';
}
