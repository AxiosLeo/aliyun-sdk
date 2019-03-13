<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 * @method $this setNextPageToken($NextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method integer getMaximumPageSize()
 */
final class QueryMediaCensorJobDetail extends MtsCommon
{
    public $action = 'QueryMediaCensorJobDetail';
}
