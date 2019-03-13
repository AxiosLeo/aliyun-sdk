<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobIds($JobIds)
 * @method string getJobIds()
 */
final class QueryEditingJobList extends MtsCommon
{
    public $action = 'QueryEditingJobList';
}
