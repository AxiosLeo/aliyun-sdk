<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCidrBlock($CidrBlock)
 * @method string getCidrBlock()
 * @method $this setIpv6CidrBlock($Ipv6CidrBlock)
 * @method integer getIpv6CidrBlock()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchName($VSwitchName)
 * @method string getVSwitchName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateVSwitch extends VpcCommon
{
    public $action = 'CreateVSwitch';
}
