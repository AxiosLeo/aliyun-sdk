<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setItems($Items)
 * @method string getItems()
 */
final class SetDeviceProperty extends IotCommon
{
    public $action = 'SetDeviceProperty';
}
