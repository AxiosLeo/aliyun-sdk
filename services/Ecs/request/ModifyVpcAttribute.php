<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setVpcName($VpcName)
 * @method string getVpcName()
 * @method $this setCidrBlock($CidrBlock)
 * @method string getCidrBlock()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class ModifyVpcAttribute extends EcsCommon
{
    public $action = 'ModifyVpcAttribute';
}
