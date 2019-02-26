<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setStart($Start)
 * @method integer getStart()
 * @method $this setLines($Lines)
 * @method integer getLines()
 * @method $this setOffset($Offset)
 * @method integer getOffset()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setReverse($Reverse)
 * @method boolean getReverse()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setNodeInstanceId($NodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeFlowNodeInstanceLauncherLog extends EmrCommon
{
    public $action = 'DescribeFlowNodeInstanceLauncherLog';
}
