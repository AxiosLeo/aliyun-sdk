<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDiskDeviceMapping($DiskDeviceMapping)
 * @method array getDiskDeviceMapping()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnapshotId($SnapshotId)
 * @method string getSnapshotId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setImageName($ImageName)
 * @method string getImageName()
 * @method $this setImageVersion($ImageVersion)
 * @method string getImageVersion()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setPlatform($Platform)
 * @method string getPlatform()
 * @method $this setArchitecture($Architecture)
 * @method string getArchitecture()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class CreateImage extends EcsCommon
{
    public $action = 'CreateImage';
}
