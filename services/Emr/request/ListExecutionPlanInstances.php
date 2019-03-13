<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setExecutionPlanIdList($ExecutionPlanIdList)
 * @method array getExecutionPlanIdList()
 * @method $this setOnlyLastInstance($OnlyLastInstance)
 * @method boolean getOnlyLastInstance()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setIsDesc($IsDesc)
 * @method boolean getIsDesc()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListExecutionPlanInstances extends EmrCommon
{
    public $action = 'ListExecutionPlanInstances';
}
