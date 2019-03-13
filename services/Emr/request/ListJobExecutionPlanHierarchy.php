<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentId($CurrentId)
 * @method integer getCurrentId()
 */
final class ListJobExecutionPlanHierarchy extends EmrCommon
{
    public $action = 'ListJobExecutionPlanHierarchy';
}
