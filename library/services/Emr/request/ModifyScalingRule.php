<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setScalingRuleId($ScalingRuleId)
 * @method string getScalingRuleId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($HostGroupId)
 * @method string getHostGroupId()
 * @method $this setRuleName($RuleName)
 * @method string getRuleName()
 * @method $this setAdjustmentType($AdjustmentType)
 * @method string getAdjustmentType()
 * @method $this setAdjustmentValue($AdjustmentValue)
 * @method integer getAdjustmentValue()
 * @method $this setCooldown($Cooldown)
 * @method integer getCooldown()
 * @method $this setLaunchTime($LaunchTime)
 * @method string getLaunchTime()
 * @method $this setLaunchExpirationTime($LaunchExpirationTime)
 * @method integer getLaunchExpirationTime()
 * @method $this setRecurrenceType($RecurrenceType)
 * @method string getRecurrenceType()
 * @method $this setRecurrenceValue($RecurrenceValue)
 * @method string getRecurrenceValue()
 * @method $this setRecurrenceEndTime($RecurrenceEndTime)
 * @method string getRecurrenceEndTime()
 * @method $this setSchedulerTrigger($SchedulerTrigger)
 * @method array getSchedulerTrigger()
 * @method $this setCloudWatchTrigger($CloudWatchTrigger)
 * @method array getCloudWatchTrigger()
 */
final class ModifyScalingRule extends EmrCommon
{
    public $action = 'ModifyScalingRule';
}
