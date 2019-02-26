<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInnerAccessPolicy($InnerAccessPolicy)
 * @method string getInnerAccessPolicy()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifySecurityGroupPolicy extends EcsCommon
{
    public $action = 'ModifySecurityGroupPolicy';
}
