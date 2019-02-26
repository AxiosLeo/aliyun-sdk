<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDiskDeviceMapping($DiskDeviceMapping)
 * @method array getDiskDeviceMapping()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageName($ImageName)
 * @method string getImageName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setArchitecture($Architecture)
 * @method string getArchitecture()
 * @method $this setOSType($OSType)
 * @method string getOSType()
 * @method $this setPlatform($Platform)
 * @method string getPlatform()
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class ImportImage extends EcsCommon
{
    public $action = 'ImportImage';
}
