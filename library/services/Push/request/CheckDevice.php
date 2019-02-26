<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setDeviceId($DeviceId)
 * @method string getDeviceId()
 */
final class CheckDevice extends PushCommon
{
    public $action = 'CheckDevice';
}
