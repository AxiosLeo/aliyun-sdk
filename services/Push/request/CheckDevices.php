<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setDeviceIds($DeviceIds)
 * @method string getDeviceIds()
 */
final class CheckDevices extends PushCommon
{
    public $action = 'CheckDevices';
}
