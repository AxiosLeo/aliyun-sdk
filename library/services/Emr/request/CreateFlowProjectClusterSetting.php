<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setDefaultUser($DefaultUser)
 * @method string getDefaultUser()
 * @method $this setDefaultQueue($DefaultQueue)
 * @method string getDefaultQueue()
 * @method $this setUserList($UserList)
 * @method array getUserList()
 * @method $this setQueueList($QueueList)
 * @method array getQueueList()
 * @method $this setHostList($HostList)
 * @method array getHostList()
 */
final class CreateFlowProjectClusterSetting extends EmrCommon
{
    public $action = 'CreateFlowProjectClusterSetting';
}
