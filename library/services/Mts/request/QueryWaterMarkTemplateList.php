<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setWaterMarkTemplateIds($WaterMarkTemplateIds)
 * @method string getWaterMarkTemplateIds()
 */
final class QueryWaterMarkTemplateList extends MtsCommon
{
    public $action = 'QueryWaterMarkTemplateList';
}
