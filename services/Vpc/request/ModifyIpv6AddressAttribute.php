<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($Ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyIpv6AddressAttribute extends VpcCommon
{
    public $action = 'ModifyIpv6AddressAttribute';
}
