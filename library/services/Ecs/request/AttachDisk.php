<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setDevice($Device)
 * @method string getDevice()
 * @method $this setDeleteWithInstance($DeleteWithInstance)
 * @method boolean getDeleteWithInstance()
 */
final class AttachDisk extends EcsCommon
{
    public $action = 'AttachDisk';
}
