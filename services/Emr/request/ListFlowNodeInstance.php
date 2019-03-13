<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListFlowNodeInstance extends EmrCommon
{
    public $action = 'ListFlowNodeInstance';
}
