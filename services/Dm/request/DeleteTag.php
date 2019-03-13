<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTagId($TagId)
 * @method integer getTagId()
 */
final class DeleteTag extends DmCommon
{
    public $action = 'DeleteTag';
}
