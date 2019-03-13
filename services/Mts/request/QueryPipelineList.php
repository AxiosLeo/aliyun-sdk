<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPipelineIds($PipelineIds)
 * @method string getPipelineIds()
 */
final class QueryPipelineList extends MtsCommon
{
    public $action = 'QueryPipelineList';
}
