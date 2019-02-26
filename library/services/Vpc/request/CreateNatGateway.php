<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setBandwidthPackage($BandwidthPackage)
 * @method array getBandwidthPackage()
 */
final class CreateNatGateway extends VpcCommon
{
    public $action = 'CreateNatGateway';
}
