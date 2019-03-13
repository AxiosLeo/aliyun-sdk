<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setTemplateId($TemplateId)
 * @method string getTemplateId()
 * @method $this setTemplateName($TemplateName)
 * @method string getTemplateName()
 * @method $this setTemplateConfig($TemplateConfig)
 * @method string getTemplateConfig()
 */
final class UpdateAITemplate extends VodCommon
{
    public $action = 'UpdateAITemplate';
}
