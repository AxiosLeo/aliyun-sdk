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
 * @method $this setTaskType($TaskType)
 * @method string getTaskType()
 * @method $this setIsHistory($IsHistory)
 * @method integer getIsHistory()
 */
final class DescribeActiveOperationTaskRegion extends DdsCommon
{
    public $action = 'DescribeActiveOperationTaskRegion';
}
