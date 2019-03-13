<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method array getPrivateIpAddress()
 * @method $this setSecondaryPrivateIpAddressCount($SecondaryPrivateIpAddressCount)
 * @method integer getSecondaryPrivateIpAddressCount()
 */
final class AssignPrivateIpAddresses extends EcsCommon
{
    public $action = 'AssignPrivateIpAddresses';
}
