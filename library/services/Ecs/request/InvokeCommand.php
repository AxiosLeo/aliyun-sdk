<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setCommandId($CommandId)
 * @method string getCommandId()
 * @method $this setTimed($Timed)
 * @method boolean getTimed()
 * @method $this setFrequency($Frequency)
 * @method string getFrequency()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 */
final class InvokeCommand extends EcsCommon
{
    public $action = 'InvokeCommand';
}
