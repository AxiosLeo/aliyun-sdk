<?php
namespace aliyun\sdk\services\Cr\request;

use aliyun\sdk\services\Cr\CrCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRepoIds($RepoIds)
 * @method string getRepoIds()
 */
final class GetRepoBatch extends CrCommon
{
    public $action = 'GetRepoBatch';
}
