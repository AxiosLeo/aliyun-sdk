<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setClientKey($ClientKey)
 * @method string getClientKey()
 * @method $this setKeyType($KeyType)
 * @method string getKeyType()
 */
final class QueryTags extends PushCommon
{
    public $action = 'QueryTags';
}
