<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setISP($ISP)
 * @method string getISP()
 * @method $this setNetmode($Netmode)
 * @method string getNetmode()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AllocateEipAddress extends VpcCommon
{
    public $action = 'AllocateEipAddress';
}
