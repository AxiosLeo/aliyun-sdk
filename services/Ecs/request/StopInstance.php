<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setConfirmStop($ConfirmStop)
 * @method boolean getConfirmStop()
 * @method $this setForceStop($ForceStop)
 * @method boolean getForceStop()
 * @method $this setStoppedMode($StoppedMode)
 * @method string getStoppedMode()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setHibernate($Hibernate)
 * @method boolean getHibernate()
 */
final class StopInstance extends EcsCommon
{
    public $action = 'StopInstance';
}
