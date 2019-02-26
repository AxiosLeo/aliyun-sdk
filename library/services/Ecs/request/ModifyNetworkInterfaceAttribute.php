<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method array getSecurityGroupId()
 * @method $this setNetworkInterfaceName($NetworkInterfaceName)
 * @method string getNetworkInterfaceName()
 * @method $this setNetworkInterfaceId($NetworkInterfaceId)
 * @method string getNetworkInterfaceId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyNetworkInterfaceAttribute extends EcsCommon
{
    public $action = 'ModifyNetworkInterfaceAttribute';
}
