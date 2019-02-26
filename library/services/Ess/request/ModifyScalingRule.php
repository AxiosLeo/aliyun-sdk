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
 * @method $this setAdjustmentType($AdjustmentType)
 * @method string getAdjustmentType()
 * @method $this setAdjustmentValue($AdjustmentValue)
 * @method integer getAdjustmentValue()
 */
final class ModifyScalingRule extends EssCommon
{
    public $action = 'ModifyScalingRule';
}
