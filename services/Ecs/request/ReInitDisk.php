<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setAutoStartInstance($AutoStartInstance)
 * @method boolean getAutoStartInstance()
 * @method $this setSecurityEnhancementStrategy($SecurityEnhancementStrategy)
 * @method string getSecurityEnhancementStrategy()
 */
final class ReInitDisk extends EcsCommon
{
    public $action = 'ReInitDisk';
}
