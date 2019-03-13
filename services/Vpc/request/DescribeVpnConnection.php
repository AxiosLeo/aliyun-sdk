<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpnConnectionId($VpnConnectionId)
 * @method string getVpnConnectionId()
 */
final class DescribeVpnConnection extends VpcCommon
{
    public $action = 'DescribeVpnConnection';
}
