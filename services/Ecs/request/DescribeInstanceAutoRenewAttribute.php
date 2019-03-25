<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRenewalStatus($RenewalStatus)
 * @method string getRenewalStatus()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method string getPageNumber()
 */
final class DescribeInstanceAutoRenewAttribute extends EcsCommon
{
    public $action = 'DescribeInstanceAutoRenewAttribute';
}
