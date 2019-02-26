<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setLifeCycle($LifeCycle)
 * @method integer getLifeCycle()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class SetDeviceStorageLifeCycle extends IotCommon
{
    public $action = 'SetDeviceStorageLifeCycle';
}
