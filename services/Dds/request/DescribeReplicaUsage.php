<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setReplicaId($ReplicaId)
 * @method string getReplicaId()
 * @method $this setSourceDBInstanceId($SourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setDestinationDBInstanceId($DestinationDBInstanceId)
 * @method string getDestinationDBInstanceId()
 */
final class DescribeReplicaUsage extends DdsCommon
{
    public $action = 'DescribeReplicaUsage';
}
