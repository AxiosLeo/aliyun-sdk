<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDiskId($DiskId)
 * @method string getDiskId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setNewSize($NewSize)
 * @method integer getNewSize()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ResizeDisk extends EcsCommon
{
    public $action = 'ResizeDisk';
}
