<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setWaterMarkTemplateId($WaterMarkTemplateId)
 * @method string getWaterMarkTemplateId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setConfig($Config)
 * @method string getConfig()
 */
final class UpdateWaterMarkTemplate extends MtsCommon
{
    public $action = 'UpdateWaterMarkTemplate';
}
