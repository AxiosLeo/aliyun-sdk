<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSystemDiskPolicyEnabled($SystemDiskPolicyEnabled)
 * @method boolean getSystemDiskPolicyEnabled()
 * @method $this setSystemDiskPolicyTimePeriod($SystemDiskPolicyTimePeriod)
 * @method integer getSystemDiskPolicyTimePeriod()
 * @method $this setSystemDiskPolicyRetentionDays($SystemDiskPolicyRetentionDays)
 * @method integer getSystemDiskPolicyRetentionDays()
 * @method $this setSystemDiskPolicyRetentionLastWeek($SystemDiskPolicyRetentionLastWeek)
 * @method boolean getSystemDiskPolicyRetentionLastWeek()
 * @method $this setDataDiskPolicyEnabled($DataDiskPolicyEnabled)
 * @method boolean getDataDiskPolicyEnabled()
 * @method $this setDataDiskPolicyTimePeriod($DataDiskPolicyTimePeriod)
 * @method integer getDataDiskPolicyTimePeriod()
 * @method $this setDataDiskPolicyRetentionDays($DataDiskPolicyRetentionDays)
 * @method integer getDataDiskPolicyRetentionDays()
 * @method $this setDataDiskPolicyRetentionLastWeek($DataDiskPolicyRetentionLastWeek)
 * @method boolean getDataDiskPolicyRetentionLastWeek()
 */
final class ModifyAutoSnapshotPolicy extends EcsCommon
{
    public $action = 'ModifyAutoSnapshotPolicy';
}
