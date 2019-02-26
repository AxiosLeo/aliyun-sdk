<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 * @method $this setTerminateSubscription($TerminateSubscription)
 * @method boolean getTerminateSubscription()
 */
final class DeleteInstance extends EcsCommon
{
    public $action = 'DeleteInstance';
}
