<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTaskIds($TaskIds)
 * @method string getTaskIds()
 * @method $this setTaskAction($TaskAction)
 * @method string getTaskAction()
 * @method $this setTaskStatus($TaskStatus)
 * @method string getTaskStatus()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeTasks extends EcsCommon
{
    public $action = 'DescribeTasks';
}
