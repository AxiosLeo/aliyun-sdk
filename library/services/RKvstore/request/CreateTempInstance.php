<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class CreateTempInstance extends RKvstoreCommon
{
    public $action = 'CreateTempInstance';
}
