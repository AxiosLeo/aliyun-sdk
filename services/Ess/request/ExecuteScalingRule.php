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
 * @method $this setBreachThreshold($BreachThreshold)
 * @method float getBreachThreshold()
 * @method $this setMetricValue($MetricValue)
 * @method float getMetricValue()
 */
final class ExecuteScalingRule extends EssCommon
{
    public $action = 'ExecuteScalingRule';
}
