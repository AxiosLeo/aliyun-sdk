<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setRuleId($RuleId)
 * @method integer getRuleId()
 */
final class DeleteRule extends IotCommon
{
    public $action = 'DeleteRule';
}
