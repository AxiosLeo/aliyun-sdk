<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSnapshotName($SnapshotName)
 * @method string getSnapshotName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setOssBucket($OssBucket)
 * @method string getOssBucket()
 * @method $this setOssObject($OssObject)
 * @method string getOssObject()
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class ImportSnapshot extends EcsCommon
{
    public $action = 'ImportSnapshot';
}
