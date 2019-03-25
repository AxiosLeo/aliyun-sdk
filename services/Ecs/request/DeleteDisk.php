<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 */
final class DeleteDisk extends EcsCommon
{
    public $action = 'DeleteDisk';
}
