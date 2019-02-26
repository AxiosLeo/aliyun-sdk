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
 * @method $this setSyncTaskId($SyncTaskId)
 * @method string getSyncTaskId()
 */
final class GetRepoSyncTask extends CrCommon
{
    public $action = 'GetRepoSyncTask';
}
