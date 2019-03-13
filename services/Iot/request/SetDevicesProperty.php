<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDeviceName($DeviceName)
 * @method array getDeviceName()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setItems($Items)
 * @method string getItems()
 */
final class SetDevicesProperty extends IotCommon
{
    public $action = 'SetDevicesProperty';
}
