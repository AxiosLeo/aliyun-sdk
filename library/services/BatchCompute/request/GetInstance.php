<?php
namespace aliyun\sdk\services\BatchCompute\request;

use aliyun\sdk\services\BatchCompute\BatchComputeCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceName($ResourceName)
 * @method string getResourceName()
 * @method $this setTaskName($TaskName)
 * @method string getTaskName()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class GetInstance extends BatchComputeCommon
{
    public $action = 'GetInstance';
}
