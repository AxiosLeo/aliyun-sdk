<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 */
final class ResetDisk extends EcsCommon
{
    public $action = 'ResetDisk';
}
