<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class DeleteSnapshot extends EcsCommon
{
    public $action = 'DeleteSnapshot';
}
