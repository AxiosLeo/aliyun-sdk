<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($NatGatewayId)
 * @method string getNatGatewayId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeNatGateways extends VpcCommon
{
    public $action = 'DescribeNatGateways';
}
