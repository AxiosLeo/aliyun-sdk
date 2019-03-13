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
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setSchemaVersion($SchemaVersion)
 * @method integer getSchemaVersion()
 */
final class GetImageManifest extends CrCommon
{
    public $action = 'GetImageManifest';
}
