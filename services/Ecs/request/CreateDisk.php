<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setDiskName($DiskName)
 * @method string getDiskName()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setDiskCategory($DiskCategory)
 * @method string getDiskCategory()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setEncrypted($Encrypted)
 * @method boolean getEncrypted()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setKMSKeyId($KMSKeyId)
 * @method string getKMSKeyId()
 */
final class CreateDisk extends EcsCommon
{
    public $action = 'CreateDisk';
}
