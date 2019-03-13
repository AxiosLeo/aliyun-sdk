<?php
namespace aliyun\sdk\services\Httpdns\request;

use aliyun\sdk\services\Httpdns\HttpdnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGranularity($Granularity)
 * @method string getGranularity()
 * @method $this setTimeSpan($TimeSpan)
 * @method integer getTimeSpan()
 */
final class GetResolveCountSummary extends HttpdnsCommon
{
    public $action = 'GetResolveCountSummary';
}
