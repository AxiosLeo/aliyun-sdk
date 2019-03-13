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
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class UnbindTag extends PushCommon
{
    public $action = 'UnbindTag';
}
