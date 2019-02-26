<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class ModifyDeviceStatus extends IotCommon
{
    public $action = 'ModifyDeviceStatus';
}
