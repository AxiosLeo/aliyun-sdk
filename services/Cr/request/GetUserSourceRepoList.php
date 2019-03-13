<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSourceAccountId($SourceAccountId)
 * @method integer getSourceAccountId()
 */
final class GetUserSourceRepoList extends CrCommon
{
    public $action = 'GetUserSourceRepoList';
}
