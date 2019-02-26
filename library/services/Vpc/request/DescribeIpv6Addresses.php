<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($Ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setIpv6Address($Ipv6Address)
 * @method string getIpv6Address()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAssociatedInstanceId($AssociatedInstanceId)
 * @method string getAssociatedInstanceId()
 * @method $this setAssociatedInstanceType($AssociatedInstanceType)
 * @method string getAssociatedInstanceType()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setIpv6InternetBandwidthId($Ipv6InternetBandwidthId)
 * @method string getIpv6InternetBandwidthId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeIpv6Addresses extends VpcCommon
{
    public $action = 'DescribeIpv6Addresses';
}
