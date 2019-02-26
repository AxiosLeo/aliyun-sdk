<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setTaskName($TaskName)
 * @method string getTaskName()
 * @method $this setTaskScope($TaskScope)
 * @method string getTaskScope()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setJsonData($JsonData)
 * @method string getJsonData()
 * @method $this setInstanceList($InstanceList)
 * @method array getInstanceList()
 * @method $this setAlertConfig($AlertConfig)
 * @method string getAlertConfig()
 */
final class TaskConfigCreate extends CmsCommon
{
    public $action = 'TaskConfigCreate';
}
