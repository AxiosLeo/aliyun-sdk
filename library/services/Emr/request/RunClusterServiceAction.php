<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostGroupIdList($HostGroupIdList)
 * @method array getHostGroupIdList()
 * @method $this setHostIdList($HostIdList)
 * @method string getHostIdList()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setServiceActionName($ServiceActionName)
 * @method string getServiceActionName()
 * @method $this setCustomCommand($CustomCommand)
 * @method string getCustomCommand()
 * @method $this setComponentNameList($ComponentNameList)
 * @method string getComponentNameList()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setIsRolling($IsRolling)
 * @method boolean getIsRolling()
 * @method $this setExecuteStrategy($ExecuteStrategy)
 * @method string getExecuteStrategy()
 * @method $this setCustomParams($CustomParams)
 * @method string getCustomParams()
 * @method $this setInterval($Interval)
 * @method integer getInterval()
 * @method $this setNodeCountPerBatch($NodeCountPerBatch)
 * @method integer getNodeCountPerBatch()
 * @method $this setTotlerateFailCount($TotlerateFailCount)
 * @method integer getTotlerateFailCount()
 * @method $this setOnlyRestartStaleConfigNodes($OnlyRestartStaleConfigNodes)
 * @method boolean getOnlyRestartStaleConfigNodes()
 * @method $this setTurnOnMaintenanceMode($TurnOnMaintenanceMode)
 * @method boolean getTurnOnMaintenanceMode()
 */
final class RunClusterServiceAction extends EmrCommon
{
    public $action = 'RunClusterServiceAction';
}
