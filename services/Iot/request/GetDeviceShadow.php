<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setShadowMessage($ShadowMessage)
 * @method string getShadowMessage()
 */
final class GetDeviceShadow extends IotCommon
{
    public $action = 'GetDeviceShadow';
}
