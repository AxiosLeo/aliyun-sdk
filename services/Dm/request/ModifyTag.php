<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTagId($TagId)
 * @method integer getTagId()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class ModifyTag extends DmCommon
{
    public $action = 'ModifyTag';
}
