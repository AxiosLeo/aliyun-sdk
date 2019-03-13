<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVodTemplateId($VodTemplateId)
 * @method string getVodTemplateId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTemplateConfig($TemplateConfig)
 * @method string getTemplateConfig()
 */
final class UpdateVodTemplate extends VodCommon
{
    public $action = 'UpdateVodTemplate';
}
