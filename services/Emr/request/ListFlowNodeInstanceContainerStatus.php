<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setNodeInstanceId($NodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ListFlowNodeInstanceContainerStatus extends EmrCommon
{
    public $action = 'ListFlowNodeInstanceContainerStatus';
}
