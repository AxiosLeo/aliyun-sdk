<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCallId($CallId)
 * @method string getCallId()
 */
final class GetJobStatusByCallId extends CCCCommon
{
    public $action = 'GetJobStatusByCallId';
}
