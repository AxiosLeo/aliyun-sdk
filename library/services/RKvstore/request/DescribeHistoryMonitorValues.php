<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setIntervalForHistory($IntervalForHistory)
 * @method string getIntervalForHistory()
 * @method $this setMonitorKeys($MonitorKeys)
 * @method string getMonitorKeys()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 */
final class DescribeHistoryMonitorValues extends RKvstoreCommon
{
    public $action = 'DescribeHistoryMonitorValues';
}
