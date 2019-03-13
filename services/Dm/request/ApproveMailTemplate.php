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
final class ApproveMailTemplate extends DmCommon
{
    public $action = 'ApproveMailTemplate';
}
