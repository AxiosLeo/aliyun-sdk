<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCommandId($CommandId)
 * @method string getCommandId()
 */
final class DeleteCommand extends EcsCommon
{
    public $action = 'DeleteCommand';
}
