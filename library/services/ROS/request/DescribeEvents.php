<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setStackName($StackName)
 * @method string getStackName()
 * @method $this setStackId($StackId)
 * @method string getStackId()
 * @method $this setResourceStatus($ResourceStatus)
 * @method string getResourceStatus()
 * @method $this setResourceName($ResourceName)
 * @method string getResourceName()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeEvents extends ROSCommon
{
    public $action = 'DescribeEvents';
}
