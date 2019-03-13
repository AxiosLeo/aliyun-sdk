<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setNextPageToken($NextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method integer getMaximumPageSize()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setStartOfJobCreatedTimeRange($StartOfJobCreatedTimeRange)
 * @method string getStartOfJobCreatedTimeRange()
 * @method $this setEndOfJobCreatedTimeRange($EndOfJobCreatedTimeRange)
 * @method string getEndOfJobCreatedTimeRange()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class ListJob extends MtsCommon
{
    public $action = 'ListJob';
}
