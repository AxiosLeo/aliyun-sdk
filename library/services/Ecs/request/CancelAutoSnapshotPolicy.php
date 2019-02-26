<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setdiskIds($diskIds)
 * @method string getdiskIds()
 */
final class CancelAutoSnapshotPolicy extends EcsCommon
{
    public $action = 'CancelAutoSnapshotPolicy';
}
