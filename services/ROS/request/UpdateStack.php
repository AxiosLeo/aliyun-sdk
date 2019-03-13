<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setStackName($StackName)
 * @method string getStackName()
 * @method $this setStackId($StackId)
 * @method string getStackId()
 */
final class UpdateStack extends ROSCommon
{
    public $action = 'UpdateStack';
}
