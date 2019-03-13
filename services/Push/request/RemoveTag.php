<?php
namespace aliyun\sdk\services\Push\request;

use aliyun\sdk\services\Push\PushCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAppKey($AppKey)
 * @method integer getAppKey()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class RemoveTag extends PushCommon
{
    public $action = 'RemoveTag';
}
