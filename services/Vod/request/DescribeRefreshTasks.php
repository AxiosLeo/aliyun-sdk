<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeRefreshTasks extends VodCommon
{
    public $action = 'DescribeRefreshTasks';
}
