<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class ExportSnapshot extends EcsCommon
{
    public $action = 'ExportSnapshot';
}
