<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServerId($ServerId)
 * @method string getServerId()
 * @method $this setAddressIPVersion($AddressIPVersion)
 * @method string getAddressIPVersion()
 * @method $this setLoadBalancerStatus($LoadBalancerStatus)
 * @method string getLoadBalancerStatus()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setLoadBalancerName($LoadBalancerName)
 * @method string getLoadBalancerName()
 * @method $this setServerIntranetAddress($ServerIntranetAddress)
 * @method string getServerIntranetAddress()
 * @method $this setAddressType($AddressType)
 * @method string getAddressType()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setAddress($Address)
 * @method string getAddress()
 * @method $this setMasterZoneId($MasterZoneId)
 * @method string getMasterZoneId()
 * @method $this setSlaveZoneId($SlaveZoneId)
 * @method string getSlaveZoneId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setFuzzy($Fuzzy)
 * @method string getFuzzy()
 */
final class DescribeLoadBalancers extends SlbCommon
{
    public $action = 'DescribeLoadBalancers';
}
