<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 */
final class DetachClassicLinkVpc extends EcsCommon
{
    public $action = 'DetachClassicLinkVpc';
}
