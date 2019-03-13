<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setObjectPath($ObjectPath)
 * @method string getObjectPath()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setObjectType($ObjectType)
 * @method string getObjectType()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class DescribeRefreshTasks extends CdnCommon
{
    public $action = 'DescribeRefreshTasks';
}
