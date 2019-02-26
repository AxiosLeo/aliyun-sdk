<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRuleId($RuleId)
 * @method integer getRuleId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setConfiguration($Configuration)
 * @method string getConfiguration()
 * @method $this setErrorActionFlag($ErrorActionFlag)
 * @method boolean getErrorActionFlag()
 */
final class CreateRuleAction extends IotCommon
{
    public $action = 'CreateRuleAction';
}
