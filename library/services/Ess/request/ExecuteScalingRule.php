<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingRuleAri($ScalingRuleAri)
 * @method string getScalingRuleAri()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ExecuteScalingRule extends EssCommon
{
    public $action = 'ExecuteScalingRule';
}
