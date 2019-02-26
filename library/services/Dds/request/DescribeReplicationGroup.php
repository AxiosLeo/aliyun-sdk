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
 * @method $this setReplicationGroupId($ReplicationGroupId)
 * @method string getReplicationGroupId()
 * @method $this setSourceInstanceId($SourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceIds($DestinationInstanceIds)
 * @method string getDestinationInstanceIds()
 */
final class DescribeReplicationGroup extends DdsCommon
{
    public $action = 'DescribeReplicationGroup';
}
