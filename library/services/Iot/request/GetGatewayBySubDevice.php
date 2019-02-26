<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class GetGatewayBySubDevice extends IotCommon
{
    public $action = 'GetGatewayBySubDevice';
}
