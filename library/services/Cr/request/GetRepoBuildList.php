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
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class GetRepoBuildList extends CrCommon
{
    public $action = 'GetRepoBuildList';
}
