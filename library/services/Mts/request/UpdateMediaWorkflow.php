<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaWorkflowId($MediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setTopology($Topology)
 * @method string getTopology()
 */
final class UpdateMediaWorkflow extends MtsCommon
{
    public $action = 'UpdateMediaWorkflow';
}
