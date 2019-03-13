<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setTaskName($TaskName)
 * @method string getTaskName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class TaskConfigList extends CmsCommon
{
    public $action = 'TaskConfigList';
}
