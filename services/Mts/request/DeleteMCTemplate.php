<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 */
final class DeleteMCTemplate extends MtsCommon
{
    public $action = 'DeleteMCTemplate';
}
