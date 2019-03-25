<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setInstanceTypeFamily($InstanceTypeFamily)
 * @method string getInstanceTypeFamily()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setDemandStatus($DemandStatus)
 * @method array getDemandStatus()
 */
final class DescribeDemands extends EcsCommon
{
    public $action = 'DescribeDemands';
}
