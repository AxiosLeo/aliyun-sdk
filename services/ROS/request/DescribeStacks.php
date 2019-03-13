<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setStackId($StackId)
 * @method string getStackId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeStacks extends ROSCommon
{
    public $action = 'DescribeStacks';
}
