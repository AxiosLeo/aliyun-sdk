<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setVSwitchName($VSwitchName)
 * @method string getVSwitchName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setIpv6CidrBlock($Ipv6CidrBlock)
 * @method integer getIpv6CidrBlock()
 */
final class ModifyVSwitchAttribute extends VpcCommon
{
    public $action = 'ModifyVSwitchAttribute';
}
