<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSourceAccountId($SourceAccountId)
 * @method integer getSourceAccountId()
 * @method $this setSourceRepoNamespace($SourceRepoNamespace)
 * @method string getSourceRepoNamespace()
 * @method $this setSourceRepoName($SourceRepoName)
 * @method string getSourceRepoName()
 */
final class GetUserSourceRepoRefList extends CrCommon
{
    public $action = 'GetUserSourceRepoRefList';
}
