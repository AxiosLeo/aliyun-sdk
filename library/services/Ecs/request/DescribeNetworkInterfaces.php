<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setPrimaryIpAddress($PrimaryIpAddress)
 * @method string getPrimaryIpAddress()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setNetworkInterfaceName($NetworkInterfaceName)
 * @method string getNetworkInterfaceName()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method array getNetworkInterfaceId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeNetworkInterfaces extends EcsCommon
{
    public $action = 'DescribeNetworkInterfaces';
}
