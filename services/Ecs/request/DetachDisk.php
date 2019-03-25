<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 */
final class DetachDisk extends EcsCommon
{
    public $action = 'DetachDisk';
}
