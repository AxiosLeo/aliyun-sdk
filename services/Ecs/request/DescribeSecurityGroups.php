<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setSecurityGroupIds($SecurityGroupIds)
 * @method string getSecurityGroupIds()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setSecurityGroupName($SecurityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setIsQueryEcsCount($IsQueryEcsCount)
 * @method boolean getIsQueryEcsCount()
 * @method $this setFuzzyQuery($FuzzyQuery)
 * @method boolean getFuzzyQuery()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 */
final class DescribeSecurityGroups extends EcsCommon
{
    public $action = 'DescribeSecurityGroups';
}
