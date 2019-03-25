<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInitLocalDisk($InitLocalDisk)
 * @method boolean getInitLocalDisk()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 */
final class StartInstance extends EcsCommon
{
    public $action = 'StartInstance';
}
