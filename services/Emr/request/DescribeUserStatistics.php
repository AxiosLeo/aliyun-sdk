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
 */
final class DescribeUserStatistics extends EmrCommon
{
    public $action = 'DescribeUserStatistics';
}
