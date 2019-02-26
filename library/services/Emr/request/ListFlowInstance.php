<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setFlowId($FlowId)
 * @method string getFlowId()
 * @method $this setFlowName($FlowName)
 * @method string getFlowName()
 * @method $this setOwner($Owner)
 * @method string getOwner()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setTimeRange($TimeRange)
 * @method string getTimeRange()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListFlowInstance extends EmrCommon
{
    public $action = 'ListFlowInstance';
}
