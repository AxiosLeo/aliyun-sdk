<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setWaterMarkTemplateId($WaterMarkTemplateId)
 * @method string getWaterMarkTemplateId()
 */
final class DeleteWaterMarkTemplate extends MtsCommon
{
    public $action = 'DeleteWaterMarkTemplate';
}
