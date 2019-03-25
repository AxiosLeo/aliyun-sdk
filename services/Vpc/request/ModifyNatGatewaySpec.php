<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($NatGatewayId)
 * @method string getNatGatewayId()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyNatGatewaySpec extends VpcCommon
{
    public $action = 'ModifyNatGatewaySpec';
}
