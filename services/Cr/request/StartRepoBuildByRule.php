<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRepoNamespace($RepoNamespace)
 * @method string getRepoNamespace()
 * @method $this setRepoName($RepoName)
 * @method string getRepoName()
 * @method $this setBuildRuleId($BuildRuleId)
 * @method integer getBuildRuleId()
 */
final class StartRepoBuildByRule extends CrCommon
{
    public $action = 'StartRepoBuildByRule';
}
