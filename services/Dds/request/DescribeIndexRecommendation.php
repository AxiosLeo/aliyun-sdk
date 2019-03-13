<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setDatabase($Database)
 * @method string getDatabase()
 * @method $this setCollection($Collection)
 * @method string getCollection()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setOperationType($OperationType)
 * @method string getOperationType()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeIndexRecommendation extends DdsCommon
{
    public $action = 'DescribeIndexRecommendation';
}
