<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setautoSnapshotPolicyId($autoSnapshotPolicyId)
 * @method string getautoSnapshotPolicyId()
 * @method $this setdiskIds($diskIds)
 * @method string getdiskIds()
 */
final class ApplyAutoSnapshotPolicy extends EcsCommon
{
    public $action = 'ApplyAutoSnapshotPolicy';
}
