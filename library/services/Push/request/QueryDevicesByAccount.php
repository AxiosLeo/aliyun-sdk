<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setAccount($Account)
 * @method string getAccount()
 */
final class QueryDevicesByAccount extends PushCommon
{
    public $action = 'QueryDevicesByAccount';
}
