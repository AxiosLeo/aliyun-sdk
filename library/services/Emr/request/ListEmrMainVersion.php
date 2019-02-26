<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEmrVersion($EmrVersion)
 * @method string getEmrVersion()
 * @method $this setStackName($StackName)
 * @method string getStackName()
 * @method $this setStackVersion($StackVersion)
 * @method string getStackVersion()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListEmrMainVersion extends EmrCommon
{
    public $action = 'ListEmrMainVersion';
}
