<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setAlias($Alias)
 * @method string getAlias()
 */
final class QueryDevicesByAlias extends PushCommon
{
    public $action = 'QueryDevicesByAlias';
}
