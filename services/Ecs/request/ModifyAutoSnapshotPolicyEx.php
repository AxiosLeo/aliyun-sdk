<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setregionId($regionId)
 * @method string getregionId()
 * @method $this setautoSnapshotPolicyId($autoSnapshotPolicyId)
 * @method string getautoSnapshotPolicyId()
 * @method $this setautoSnapshotPolicyName($autoSnapshotPolicyName)
 * @method string getautoSnapshotPolicyName()
 * @method $this settimePoints($timePoints)
 * @method string gettimePoints()
 * @method $this setrepeatWeekdays($repeatWeekdays)
 * @method string getrepeatWeekdays()
 * @method $this setretentionDays($retentionDays)
 * @method integer getretentionDays()
 */
final class ModifyAutoSnapshotPolicyEx extends EcsCommon
{
    public $action = 'ModifyAutoSnapshotPolicyEx';
}
