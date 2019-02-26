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
 * @method $this setUnbindAll($UnbindAll)
 * @method boolean getUnbindAll()
 */
final class UnbindAlias extends PushCommon
{
    public $action = 'UnbindAlias';
}
