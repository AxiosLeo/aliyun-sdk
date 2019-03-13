<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVncPassword($VncPassword)
 * @method string getVncPassword()
 */
final class ModifyInstanceVncPasswd extends EcsCommon
{
    public $action = 'ModifyInstanceVncPasswd';
}
