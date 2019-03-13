<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setWorkflowId($WorkflowId)
 * @method string getWorkflowId()
 * @method $this setCallCenterNumber($CallCenterNumber)
 * @method string getCallCenterNumber()
 * @method $this setCaller($Caller)
 * @method string getCaller()
 * @method $this setCallee($Callee)
 * @method string getCallee()
 */
final class StartBack2BackCall extends CCCCommon
{
    public $action = 'StartBack2BackCall';
}
