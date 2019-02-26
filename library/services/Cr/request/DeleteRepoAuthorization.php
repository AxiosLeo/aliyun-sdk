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
 * @method $this setAuthorizeId($AuthorizeId)
 * @method integer getAuthorizeId()
 */
final class DeleteRepoAuthorization extends CrCommon
{
    public $action = 'DeleteRepoAuthorization';
}
