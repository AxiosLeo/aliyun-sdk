<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($PageNumber)
 * @method string getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 */
final class DescribeClassicLinkInstances extends EcsCommon
{
    public $action = 'DescribeClassicLinkInstances';
}
