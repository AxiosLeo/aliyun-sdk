<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 */
final class CancelTask extends EcsCommon
{
    public $action = 'CancelTask';
}
