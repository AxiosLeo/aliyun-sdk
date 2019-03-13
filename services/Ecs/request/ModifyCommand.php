<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCommandId($CommandId)
 * @method string getCommandId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCommandContent($CommandContent)
 * @method string getCommandContent()
 * @method $this setWorkingDir($WorkingDir)
 * @method string getWorkingDir()
 * @method $this setTimeout($Timeout)
 * @method integer getTimeout()
 */
final class ModifyCommand extends EcsCommon
{
    public $action = 'ModifyCommand';
}
