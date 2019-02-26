<?php
namespace aliyun\sdk\services\Eci\request;

use aliyun\sdk\services\Eci\EciCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setContainerGroupId($ContainerGroupId)
 * @method string getContainerGroupId()
 * @method $this setContainerName($ContainerName)
 * @method string getContainerName()
 * @method $this setCommand($Command)
 * @method string getCommand()
 */
final class ExecContainerCommand extends EciCommon
{
    public $action = 'ExecContainerCommand';
}
