<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCustomerGatewayId($CustomerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeCustomerGateways extends VpcCommon
{
    public $action = 'DescribeCustomerGateways';
}
