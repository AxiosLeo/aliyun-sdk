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
 */
final class DescribeEmrMainVersion extends EmrCommon
{
    public $action = 'DescribeEmrMainVersion';
}
