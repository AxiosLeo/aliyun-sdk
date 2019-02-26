<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DescribeGrantRulesToCen extends VpcCommon
{
    public $action = 'DescribeGrantRulesToCen';
}
