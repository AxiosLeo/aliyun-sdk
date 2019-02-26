<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class DeletePipeline extends MtsCommon
{
    public $action = 'DeletePipeline';
}
