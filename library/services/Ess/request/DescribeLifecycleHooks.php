<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setLifecycleHookName($LifecycleHookName)
 * @method string getLifecycleHookName()
 * @method $this setLifecycleHookId($LifecycleHookId)
 * @method array getLifecycleHookId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeLifecycleHooks extends EssCommon
{
    public $action = 'DescribeLifecycleHooks';
}
