<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($JobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobStatus($JobStatus)
 * @method string getJobStatus()
 * @method $this setJobFailureReason($JobFailureReason)
 * @method string getJobFailureReason()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListJobsByGroup extends CCCCommon
{
    public $action = 'ListJobsByGroup';
}
