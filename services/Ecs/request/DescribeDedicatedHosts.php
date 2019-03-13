<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setDedicatedHostIds($DedicatedHostIds)
 * @method string getDedicatedHostIds()
 * @method $this setDedicatedHostName($DedicatedHostName)
 * @method string getDedicatedHostName()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setDedicatedHostType($DedicatedHostType)
 * @method string getDedicatedHostType()
 * @method $this setLockReason($LockReason)
 * @method string getLockReason()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class DescribeDedicatedHosts extends EcsCommon
{
    public $action = 'DescribeDedicatedHosts';
}
