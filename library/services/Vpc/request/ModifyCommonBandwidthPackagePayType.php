<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setKbpsBandwidth($KbpsBandwidth)
 * @method string getKbpsBandwidth()
 * @method $this setResourceBid($ResourceBid)
 * @method string getResourceBid()
 * @method $this setResourceUid($ResourceUid)
 * @method integer getResourceUid()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifyCommonBandwidthPackagePayType extends VpcCommon
{
    public $action = 'ModifyCommonBandwidthPackagePayType';
}
