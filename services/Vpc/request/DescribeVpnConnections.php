<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpnGatewayId($VpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setCustomerGatewayId($CustomerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setVpnConnectionId($VpnConnectionId)
 * @method string getVpnConnectionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVpnConnections extends VpcCommon
{
    public $action = 'DescribeVpnConnections';
}
