<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTraceId($TraceId)
 * @method string getTraceId()
 * @method $this setProduceParameter($ProduceParameter)
 * @method string getProduceParameter()
 */
final class ProduceInstance extends CloudwfCommon
{
    public $action = 'ProduceInstance';
}
