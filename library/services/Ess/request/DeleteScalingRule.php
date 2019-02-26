<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingRuleId($ScalingRuleId)
 * @method string getScalingRuleId()
 */
final class DeleteScalingRule extends EssCommon
{
    public $action = 'DeleteScalingRule';
}
