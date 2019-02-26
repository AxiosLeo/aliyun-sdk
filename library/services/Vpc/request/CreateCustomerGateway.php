<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setIpAddress($IpAddress)
 * @method string getIpAddress()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateCustomerGateway extends VpcCommon
{
    public $action = 'CreateCustomerGateway';
}
