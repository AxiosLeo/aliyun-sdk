<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaWorkflowIds($MediaWorkflowIds)
 * @method string getMediaWorkflowIds()
 */
final class QueryMediaWorkflowList extends MtsCommon
{
    public $action = 'QueryMediaWorkflowList';
}
