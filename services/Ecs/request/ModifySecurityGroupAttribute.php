<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setSecurityGroupName($SecurityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifySecurityGroupAttribute extends EcsCommon
{
    public $action = 'ModifySecurityGroupAttribute';
}
