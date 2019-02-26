<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method integer getTemplateId()
 * @method $this setFromType($FromType)
 * @method integer getFromType()
 */
final class DeleteTemplate extends DmCommon
{
    public $action = 'DeleteTemplate';
}
