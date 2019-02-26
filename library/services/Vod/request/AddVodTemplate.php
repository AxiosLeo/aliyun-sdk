<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTemplateType($TemplateType)
 * @method string getTemplateType()
 * @method $this setSubTemplateType($SubTemplateType)
 * @method string getSubTemplateType()
 * @method $this setTemplateConfig($TemplateConfig)
 * @method string getTemplateConfig()
 */
final class AddVodTemplate extends VodCommon
{
    public $action = 'AddVodTemplate';
}
