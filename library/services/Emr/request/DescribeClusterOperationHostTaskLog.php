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
 * @method $this setOperationId($OperationId)
 * @method string getOperationId()
 * @method $this setHostId($HostId)
 * @method string getHostId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class DescribeClusterOperationHostTaskLog extends EmrCommon
{
    public $action = 'DescribeClusterOperationHostTaskLog';
}
