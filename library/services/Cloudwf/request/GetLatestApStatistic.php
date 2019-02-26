<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 */
final class GetLatestApStatistic extends CloudwfCommon
{
    public $action = 'GetLatestApStatistic';
}
