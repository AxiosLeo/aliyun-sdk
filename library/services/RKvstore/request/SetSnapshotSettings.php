<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setBeginHour($BeginHour)
 * @method integer getBeginHour()
 * @method $this setEndHour($EndHour)
 * @method integer getEndHour()
 * @method $this setRetentionDay($RetentionDay)
 * @method integer getRetentionDay()
 * @method $this setMaxAutoSnapshots($MaxAutoSnapshots)
 * @method integer getMaxAutoSnapshots()
 * @method $this setMaxManualSnapshots($MaxManualSnapshots)
 * @method integer getMaxManualSnapshots()
 * @method $this setDayList($DayList)
 * @method integer getDayList()
 */
final class SetSnapshotSettings extends RKvstoreCommon
{
    public $action = 'SetSnapshotSettings';
}
