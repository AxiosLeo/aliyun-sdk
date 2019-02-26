<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBizId($BizId)
 * @method string getBizId()
 */
final class DescribeClusterTemplate extends EmrCommon
{
    public $action = 'DescribeClusterTemplate';
}
