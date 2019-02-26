<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPriceUnit($PriceUnit)
 * @method string getPriceUnit()
 */
final class DescribeRenewalPrice extends EcsCommon
{
    public $action = 'DescribeRenewalPrice';
}
