<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEventId($EventId)
 * @method array getEventId()
 */
final class CancelSimulatedSystemEvents extends EcsCommon
{
    public $action = 'CancelSimulatedSystemEvents';
}
