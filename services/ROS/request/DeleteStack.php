<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setStackName($StackName)
 * @method string getStackName()
 * @method $this setStackId($StackId)
 * @method string getStackId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteStack extends ROSCommon
{
    public $action = 'DeleteStack';
}
