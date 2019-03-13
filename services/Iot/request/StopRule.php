<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRuleId($RuleId)
 * @method integer getRuleId()
 */
final class StopRule extends IotCommon
{
    public $action = 'StopRule';
}
