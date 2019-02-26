<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class CreateTag extends DmCommon
{
    public $action = 'CreateTag';
}
