<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($NatGatewayId)
 * @method string getNatGatewayId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setIpCount($IpCount)
 * @method integer getIpCount()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setISP($ISP)
 * @method string getISP()
 * @method $this setZone($Zone)
 * @method string getZone()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 */
final class CreateBandwidthPackage extends VpcCommon
{
    public $action = 'CreateBandwidthPackage';
}
