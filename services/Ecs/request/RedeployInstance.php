<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setForceStop($ForceStop)
 * @method boolean getForceStop()
 */
final class RedeployInstance extends EcsCommon
{
    public $action = 'RedeployInstance';
}
