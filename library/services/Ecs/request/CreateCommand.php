<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setCommandContent($CommandContent)
 * @method string getCommandContent()
 * @method $this setWorkingDir($WorkingDir)
 * @method string getWorkingDir()
 * @method $this setTimeout($Timeout)
 * @method integer getTimeout()
 */
final class CreateCommand extends EcsCommon
{
    public $action = 'CreateCommand';
}
