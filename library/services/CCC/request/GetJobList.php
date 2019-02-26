<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($JobGroupId)
 * @method string getJobGroupId()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setQueryAll($QueryAll)
 * @method boolean getQueryAll()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetJobList extends CCCCommon
{
    public $action = 'GetJobList';
}
