<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 */
final class SubmitAIMediaAuditJob extends VodCommon
{
    public $action = 'SubmitAIMediaAuditJob';
}
