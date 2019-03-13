<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEventId($EventId)
 * @method string getEventId()
 */
final class AcceptInquiredSystemEvent extends EcsCommon
{
    public $action = 'AcceptInquiredSystemEvent';
}
