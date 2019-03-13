<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDeploymentSetIds($DeploymentSetIds)
 * @method string getDeploymentSetIds()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setStrategy($Strategy)
 * @method string getStrategy()
 * @method $this setDeploymentSetName($DeploymentSetName)
 * @method string getDeploymentSetName()
 * @method $this setGranularity($Granularity)
 * @method string getGranularity()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 */
final class DescribeDeploymentSets extends EcsCommon
{
    public $action = 'DescribeDeploymentSets';
}
