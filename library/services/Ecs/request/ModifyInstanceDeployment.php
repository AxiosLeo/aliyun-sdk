<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setDeploymentSetId($DeploymentSetId)
 * @method string getDeploymentSetId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class ModifyInstanceDeployment extends EcsCommon
{
    public $action = 'ModifyInstanceDeployment';
}
