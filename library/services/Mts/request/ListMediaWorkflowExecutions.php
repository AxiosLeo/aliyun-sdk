<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaWorkflowId($MediaWorkflowId)
 * @method string getMediaWorkflowId()
 * @method $this setMediaWorkflowName($MediaWorkflowName)
 * @method string getMediaWorkflowName()
 * @method $this setInputFileURL($InputFileURL)
 * @method string getInputFileURL()
 * @method $this setNextPageToken($NextPageToken)
 * @method string getNextPageToken()
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method integer getMaximumPageSize()
 */
final class ListMediaWorkflowExecutions extends MtsCommon
{
    public $action = 'ListMediaWorkflowExecutions';
}
