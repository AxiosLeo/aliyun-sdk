<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setCidrBlock($CidrBlock)
 * @method string getCidrBlock()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVSwitchName($VSwitchName)
 * @method string getVSwitchName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateVSwitch extends EcsCommon
{
    public $action = 'CreateVSwitch';
}
