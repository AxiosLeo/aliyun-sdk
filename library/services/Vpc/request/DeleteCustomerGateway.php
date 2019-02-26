<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setCustomerGatewayId($CustomerGatewayId)
 * @method string getCustomerGatewayId()
 */
final class DeleteCustomerGateway extends VpcCommon
{
    public $action = 'DeleteCustomerGateway';
}
