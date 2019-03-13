<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setTaskStatus($TaskStatus)
 * @method string getTaskStatus()
 * @method $this setTaskSourceType($TaskSourceType)
 * @method string getTaskSourceType()
 */
final class MetastoreListTask extends EmrCommon
{
    public $action = 'MetastoreListTask';
}
