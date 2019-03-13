<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setAcceptLanguage($AcceptLanguage)
 * @method string getAcceptLanguage()
 */
final class DescribeRegions extends EcsCommon
{
    public $action = 'DescribeRegions';
}
