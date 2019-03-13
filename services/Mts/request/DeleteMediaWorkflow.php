<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaWorkflowId($MediaWorkflowId)
 * @method string getMediaWorkflowId()
 */
final class DeleteMediaWorkflow extends MtsCommon
{
    public $action = 'DeleteMediaWorkflow';
}
