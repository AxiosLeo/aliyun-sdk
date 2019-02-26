<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($Ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeIpv6Gateways extends VpcCommon
{
    public $action = 'DescribeIpv6Gateways';
}
