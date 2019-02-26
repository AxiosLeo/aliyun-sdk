<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setSnapshotName($SnapshotName)
 * @method string getSnapshotName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifySnapshotAttribute extends EcsCommon
{
    public $action = 'ModifySnapshotAttribute';
}
