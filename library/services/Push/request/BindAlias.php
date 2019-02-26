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
 * @method $this setAliasName($AliasName)
 * @method string getAliasName()
 */
final class BindAlias extends PushCommon
{
    public $action = 'BindAlias';
}
