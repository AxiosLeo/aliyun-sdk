<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZone($Zone)
 * @method string getZone()
 * @method $this setISP($ISP)
 * @method string getISP()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setRatio($Ratio)
 * @method integer getRatio()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 */
final class CreateCommonBandwidthPackage extends VpcCommon
{
    public $action = 'CreateCommonBandwidthPackage';
}
