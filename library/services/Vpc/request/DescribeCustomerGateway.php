<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCustomerGatewayId($CustomerGatewayId)
 * @method string getCustomerGatewayId()
 */
final class DescribeCustomerGateway extends VpcCommon
{
    public $action = 'DescribeCustomerGateway';
}
