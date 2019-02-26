<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setCurrentSize($CurrentSize)
 * @method integer getCurrentSize()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListExecutePlanMigrateInfo extends EmrCommon
{
    public $action = 'ListExecutePlanMigrateInfo';
}
