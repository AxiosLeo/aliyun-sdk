<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setExecutionPlanInstanceId($ExecutionPlanInstanceId)
 * @method string getExecutionPlanInstanceId()
 * @method $this setIsDesc($IsDesc)
 * @method boolean getIsDesc()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListJobExecutionInstances extends EmrCommon
{
    public $action = 'ListJobExecutionInstances';
}
