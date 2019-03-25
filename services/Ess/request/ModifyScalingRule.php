<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingRuleId($ScalingRuleId)
 * @method string getScalingRuleId()
 * @method $this setScalingRuleName($ScalingRuleName)
 * @method string getScalingRuleName()
 * @method $this setCooldown($Cooldown)
 * @method integer getCooldown()
 * @method $this setMinAdjustmentMagnitude($MinAdjustmentMagnitude)
 * @method integer getMinAdjustmentMagnitude()
 * @method $this setAdjustmentType($AdjustmentType)
 * @method string getAdjustmentType()
 * @method $this setAdjustmentValue($AdjustmentValue)
 * @method integer getAdjustmentValue()
 * @method $this setEstimatedInstanceWarmup($EstimatedInstanceWarmup)
 * @method integer getEstimatedInstanceWarmup()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setTargetValue($TargetValue)
 * @method float getTargetValue()
 * @method $this setDisableScaleIn($DisableScaleIn)
 * @method boolean getDisableScaleIn()
 */
final class ModifyScalingRule extends EssCommon
{
    public $action = 'ModifyScalingRule';
}
