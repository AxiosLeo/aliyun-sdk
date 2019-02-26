<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setSecurityGroupName($SecurityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class CreateSecurityGroup extends EcsCommon
{
    public $action = 'CreateSecurityGroup';
}
