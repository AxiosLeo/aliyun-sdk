<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setConfirmStop($ConfirmStop)
 * @method boolean getConfirmStop()
 * @method $this setForceStop($ForceStop)
 * @method boolean getForceStop()
 * @method $this setStoppedMode($StoppedMode)
 * @method string getStoppedMode()
 */
final class StopInstance extends EcsCommon
{
    public $action = 'StopInstance';
}
