<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 */
final class DeleteCategory extends MtsCommon
{
    public $action = 'DeleteCategory';
}
