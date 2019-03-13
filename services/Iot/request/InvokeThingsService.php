<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setDeviceName($DeviceName)
 * @method array getDeviceName()
 * @method $this setIdentifier($Identifier)
 * @method string getIdentifier()
 * @method $this setArgs($Args)
 * @method string getArgs()
 */
final class InvokeThingsService extends IotCommon
{
    public $action = 'InvokeThingsService';
}
