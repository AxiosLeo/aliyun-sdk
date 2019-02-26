<?php
namespace aliyun\sdk\services\BatchCompute\request;

use aliyun\sdk\services\BatchCompute\BatchComputeCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class ListClusterInstances extends BatchComputeCommon
{
    public $action = 'ListClusterInstances';
}
