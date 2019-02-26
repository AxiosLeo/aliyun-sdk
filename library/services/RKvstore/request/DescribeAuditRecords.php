<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setDatabaseName($DatabaseName)
 * @method string getDatabaseName()
 * @method $this setQueryKeywords($QueryKeywords)
 * @method string getQueryKeywords()
 * @method $this setHostAddress($HostAddress)
 * @method string getHostAddress()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeAuditRecords extends RKvstoreCommon
{
    public $action = 'DescribeAuditRecords';
}
