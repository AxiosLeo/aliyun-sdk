<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setOffset($Offset)
 * @method integer getOffset()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setNodeInstanceId($NodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setContainerId($ContainerId)
 * @method string getContainerId()
 * @method $this setLogName($LogName)
 * @method string getLogName()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeFlowNodeInstanceContainerLog extends EmrCommon
{
    public $action = 'DescribeFlowNodeInstanceContainerLog';
}
