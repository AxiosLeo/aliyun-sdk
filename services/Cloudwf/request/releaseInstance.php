<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTraceId($TraceId)
 * @method string getTraceId()
 * @method $this setSpMsg($SpMsg)
 * @method string getSpMsg()
 */
final class releaseInstance extends CloudwfCommon
{
    public $action = 'releaseInstance';
}
