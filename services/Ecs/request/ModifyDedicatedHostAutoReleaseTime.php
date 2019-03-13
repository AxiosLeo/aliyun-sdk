<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 * @method $this setAutoReleaseTime($AutoReleaseTime)
 * @method string getAutoReleaseTime()
 */
final class ModifyDedicatedHostAutoReleaseTime extends EcsCommon
{
    public $action = 'ModifyDedicatedHostAutoReleaseTime';
}
