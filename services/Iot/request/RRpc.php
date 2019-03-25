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
 * @method $this setTimeout($Timeout)
 * @method integer getTimeout()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setTopic($Topic)
 * @method string getTopic()
 * @method $this setRequestBase64Byte($RequestBase64Byte)
 * @method string getRequestBase64Byte()
 */
final class RRpc extends IotCommon
{
    public $action = 'RRpc';
}
