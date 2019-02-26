<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setDeploymentSetName($DeploymentSetName)
 * @method string getDeploymentSetName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifyDeploymentSetAttribute extends EcsCommon
{
    public $action = 'ModifyDeploymentSetAttribute';
}
