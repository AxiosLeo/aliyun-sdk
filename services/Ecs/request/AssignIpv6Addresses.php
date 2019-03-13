<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setIpv6Address($Ipv6Address)
 * @method array getIpv6Address()
 * @method $this setIpv6AddressCount($Ipv6AddressCount)
 * @method integer getIpv6AddressCount()
 */
final class AssignIpv6Addresses extends EcsCommon
{
    public $action = 'AssignIpv6Addresses';
}
