<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setautoSnapshotPolicyId($autoSnapshotPolicyId)
 * @method string getautoSnapshotPolicyId()
 */
final class DeleteAutoSnapshotPolicy extends EcsCommon
{
    public $action = 'DeleteAutoSnapshotPolicy';
}
