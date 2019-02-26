<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApgroupId($ApgroupId)
 * @method integer getApgroupId()
 */
final class GetDailyStatistic extends CloudwfCommon
{
    public $action = 'GetDailyStatistic';
}
