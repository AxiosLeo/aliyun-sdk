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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class RenewClusterInstance extends BatchComputeCommon
{
    public $action = 'RenewClusterInstance';
}
