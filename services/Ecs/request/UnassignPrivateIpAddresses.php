<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method array getPrivateIpAddress()
 */
final class UnassignPrivateIpAddresses extends EcsCommon
{
    public $action = 'UnassignPrivateIpAddresses';
}
