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
 * @method $this setPhoneNumber($PhoneNumber)
 * @method string getPhoneNumber()
 */
final class BindPhone extends PushCommon
{
    public $action = 'BindPhone';
}
