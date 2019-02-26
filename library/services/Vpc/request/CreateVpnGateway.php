<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setEnableIpsec($EnableIpsec)
 * @method boolean getEnableIpsec()
 * @method $this setEnableSsl($EnableSsl)
 * @method boolean getEnableSsl()
 * @method $this setSslConnections($SslConnections)
 * @method integer getSslConnections()
 */
final class CreateVpnGateway extends VpcCommon
{
    public $action = 'CreateVpnGateway';
}
