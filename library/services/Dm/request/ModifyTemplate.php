<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTemplateId($TemplateId)
 * @method integer getTemplateId()
 * @method $this setTemplateName($TemplateName)
 * @method string getTemplateName()
 * @method $this setTemplateSubject($TemplateSubject)
 * @method string getTemplateSubject()
 * @method $this setTemplateNickName($TemplateNickName)
 * @method string getTemplateNickName()
 * @method $this setTemplateText($TemplateText)
 * @method string getTemplateText()
 * @method $this setSmsType($SmsType)
 * @method integer getSmsType()
 * @method $this setSmsContent($SmsContent)
 * @method string getSmsContent()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setFromType($FromType)
 * @method integer getFromType()
 */
final class ModifyTemplate extends DmCommon
{
    public $action = 'ModifyTemplate';
}
