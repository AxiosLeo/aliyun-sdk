<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaWorkflowId($MediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setTriggerMode($TriggerMode)
 * @method string getTriggerMode()
 */
final class UpdateMediaWorkflowTriggerMode extends MtsCommon
{
    public $action = 'UpdateMediaWorkflowTriggerMode';
}
