<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setPropKey($PropKey)
 * @method string getPropKey()
 */
final class DeleteDeviceProp extends IotCommon
{
    public $action = 'DeleteDeviceProp';
}
