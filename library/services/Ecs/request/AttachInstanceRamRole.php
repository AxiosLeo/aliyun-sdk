<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRamRoleName($RamRoleName)
 * @method string getRamRoleName()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 */
final class AttachInstanceRamRole extends EcsCommon
{
    public $action = 'AttachInstanceRamRole';
}
