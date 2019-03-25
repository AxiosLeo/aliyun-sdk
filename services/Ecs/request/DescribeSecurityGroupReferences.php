<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method array getSecurityGroupId()
 */
final class DescribeSecurityGroupReferences extends EcsCommon
{
    public $action = 'DescribeSecurityGroupReferences';
}
