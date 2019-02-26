<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRunIds($RunIds)
 * @method string getRunIds()
 */
final class QueryMediaWorkflowExecutionList extends MtsCommon
{
    public $action = 'QueryMediaWorkflowExecutionList';
}
