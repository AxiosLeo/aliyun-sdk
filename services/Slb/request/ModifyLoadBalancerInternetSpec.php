<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setRatio($Ratio)
 * @method integer getRatio()
 */
final class ModifyLoadBalancerInternetSpec extends SlbCommon
{
    public $action = 'ModifyLoadBalancerInternetSpec';
}
