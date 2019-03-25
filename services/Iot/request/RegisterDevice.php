<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setDevEui($DevEui)
 * @method string getDevEui()
 * @method $this setPinCode($PinCode)
 * @method string getPinCode()
 */
final class RegisterDevice extends IotCommon
{
    public $action = 'RegisterDevice';
}
