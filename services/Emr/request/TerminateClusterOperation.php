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
 */
final class TerminateClusterOperation extends EmrCommon
{
    public $action = 'TerminateClusterOperation';
}
