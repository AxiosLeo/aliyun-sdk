<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setWorkflowId($WorkflowId)
 * @method string getWorkflowId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setActionList($ActionList)
 * @method string getActionList()
 */
final class UpdateWorkflow extends VodCommon
{
    public $action = 'UpdateWorkflow';
}
