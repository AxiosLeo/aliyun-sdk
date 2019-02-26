<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setSnapshotName($SnapshotName)
 * @method string getSnapshotName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setTag($Tag)
 * @method array getTag()
 */
final class CreateSnapshot extends EcsCommon
{
    public $action = 'CreateSnapshot';
}
