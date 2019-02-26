<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 */
final class CancelJob extends MtsCommon
{
    public $action = 'CancelJob';
}
