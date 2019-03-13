<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setJobId($JobId)
 * @method string getJobId()
 */
final class GetJob extends CCCCommon
{
    public $action = 'GetJob';
}
