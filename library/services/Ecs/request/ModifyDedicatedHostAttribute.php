<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setDedicatedHostName($DedicatedHostName)
 * @method string getDedicatedHostName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setActionOnMaintenance($ActionOnMaintenance)
 * @method string getActionOnMaintenance()
 * @method $this setNetworkAttributes_SlbUdpTimeout($NetworkAttributes_SlbUdpTimeout)
 * @method integer getNetworkAttributes_SlbUdpTimeout()
 * @method $this setNetworkAttributes_UdpTimeout($NetworkAttributes_UdpTimeout)
 * @method integer getNetworkAttributes_UdpTimeout()
 */
final class ModifyDedicatedHostAttribute extends EcsCommon
{
    public $action = 'ModifyDedicatedHostAttribute';
}
