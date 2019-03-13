<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 */
final class DeleteDeploymentSet extends EcsCommon
{
    public $action = 'DeleteDeploymentSet';
}
