<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setStackName($StackName)
 * @method string getStackName()
 * @method $this setStackId($StackId)
 * @method string getStackId()
 * @method $this setResourceName($ResourceName)
 * @method string getResourceName()
 */
final class DescribeResourceDetail extends ROSCommon
{
    public $action = 'DescribeResourceDetail';
}
