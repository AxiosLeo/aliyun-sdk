<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setTaskName($TaskName)
 * @method string getTaskName()
 * @method $this setTaskScope($TaskScope)
 * @method string getTaskScope()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setJsonData($JsonData)
 * @method string getJsonData()
 * @method $this setInstanceList($InstanceList)
 * @method array getInstanceList()
 * @method $this setAlertConfig($AlertConfig)
 * @method string getAlertConfig()
 */
final class TaskConfigModify extends CmsCommon
{
    public $action = 'TaskConfigModify';
}
