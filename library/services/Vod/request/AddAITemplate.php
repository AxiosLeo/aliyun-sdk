<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setTemplateName($TemplateName)
 * @method string getTemplateName()
 * @method $this setTemplateType($TemplateType)
 * @method string getTemplateType()
 * @method $this setTemplateConfig($TemplateConfig)
 * @method string getTemplateConfig()
 */
final class AddAITemplate extends VodCommon
{
    public $action = 'AddAITemplate';
}
