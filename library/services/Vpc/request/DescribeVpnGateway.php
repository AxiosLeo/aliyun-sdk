<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($VpnGatewayId)
 * @method string getVpnGatewayId()
 */
final class DescribeVpnGateway extends VpcCommon
{
    public $action = 'DescribeVpnGateway';
}
