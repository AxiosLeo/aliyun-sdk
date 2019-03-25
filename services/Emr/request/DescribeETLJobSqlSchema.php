<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResolveId($ResolveId)
 * @method string getResolveId()
 */
final class DescribeETLJobSqlSchema extends EmrCommon
{
    public $action = 'DescribeETLJobSqlSchema';
}
