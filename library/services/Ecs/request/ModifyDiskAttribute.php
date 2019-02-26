<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setDiskName($DiskName)
 * @method string getDiskName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setDeleteWithInstance($DeleteWithInstance)
 * @method boolean getDeleteWithInstance()
 * @method $this setDeleteAutoSnapshot($DeleteAutoSnapshot)
 * @method boolean getDeleteAutoSnapshot()
 * @method $this setEnableAutoSnapshot($EnableAutoSnapshot)
 * @method boolean getEnableAutoSnapshot()
 */
final class ModifyDiskAttribute extends EcsCommon
{
    public $action = 'ModifyDiskAttribute';
}
