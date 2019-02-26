<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobIds($JobIds)
 * @method string getJobIds()
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
 * @method $this setPrimaryKeyList($PrimaryKeyList)
 * @method string getPrimaryKeyList()
 * @method $this setPipelineId($PipelineId)
 * @method string getPipelineId()
 */
final class QueryFpShotJobList extends MtsCommon
{
    public $action = 'QueryFpShotJobList';
}
