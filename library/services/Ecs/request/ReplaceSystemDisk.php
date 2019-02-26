<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setSystemDisk_Size($SystemDisk_Size)
 * @method integer getSystemDisk_Size()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUseAdditionalService($UseAdditionalService)
 * @method boolean getUseAdditionalService()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setPasswordInherit($PasswordInherit)
 * @method boolean getPasswordInherit()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setPlatform($Platform)
 * @method string getPlatform()
 * @method $this setArchitecture($Architecture)
 * @method string getArchitecture()
 * @method $this setSecurityEnhancementStrategy($SecurityEnhancementStrategy)
 * @method string getSecurityEnhancementStrategy()
 */
final class ReplaceSystemDisk extends EcsCommon
{
    public $action = 'ReplaceSystemDisk';
}
