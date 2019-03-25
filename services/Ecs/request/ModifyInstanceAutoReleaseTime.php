<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAutoReleaseTime($AutoReleaseTime)
 * @method string getAutoReleaseTime()
 */
final class ModifyInstanceAutoReleaseTime extends EcsCommon
{
    public $action = 'ModifyInstanceAutoReleaseTime';
}
