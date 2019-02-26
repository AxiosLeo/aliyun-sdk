<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNodeId($NodeId)
 * @method string getNodeId()
 * @method $this setKey($Key)
 * @method string getKey()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setRoleId($RoleId)
 * @method string getRoleId()
 * @method $this setReplicaSetRole($ReplicaSetRole)
 * @method string getReplicaSetRole()
 */
final class DescribeDBInstancePerformance extends DdsCommon
{
    public $action = 'DescribeDBInstancePerformance';
}
