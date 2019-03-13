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
 * @method $this setSnapshotIds($SnapshotIds)
 * @method string getSnapshotIds()
 * @method $this setBeginTime($BeginTime)
 * @method string getBeginTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeSnapshots extends RKvstoreCommon
{
    public $action = 'DescribeSnapshots';
}
