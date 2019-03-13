<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method array getInstanceId()
 * @method $this setEventType($EventType)
 * @method string getEventType()
 * @method $this setNotBefore($NotBefore)
 * @method string getNotBefore()
 */
final class CreateSimulatedSystemEvents extends EcsCommon
{
    public $action = 'CreateSimulatedSystemEvents';
}
