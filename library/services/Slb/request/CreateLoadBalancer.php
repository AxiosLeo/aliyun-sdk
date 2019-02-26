<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAddressType($AddressType)
 * @method string getAddressType()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setLoadBalancerName($LoadBalancerName)
 * @method string getLoadBalancerName()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setMasterZoneId($MasterZoneId)
 * @method string getMasterZoneId()
 * @method $this setSlaveZoneId($SlaveZoneId)
 * @method string getSlaveZoneId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setEnableVpcVipFlow($EnableVpcVipFlow)
 * @method string getEnableVpcVipFlow()
 * @method $this setLoadBalancerSpec($LoadBalancerSpec)
 * @method string getLoadBalancerSpec()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setAddressIPVersion($AddressIPVersion)
 * @method string getAddressIPVersion()
 * @method $this setAddress($Address)
 * @method string getAddress()
 * @method $this setRatio($Ratio)
 * @method integer getRatio()
 */
final class CreateLoadBalancer extends SlbCommon
{
    public $action = 'CreateLoadBalancer';
}
