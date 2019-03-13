<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setScalingGroupName($ScalingGroupName)
 * @method string getScalingGroupName()
 * @method $this setMinSize($MinSize)
 * @method integer getMinSize()
 * @method $this setMaxSize($MaxSize)
 * @method integer getMaxSize()
 * @method $this setVSwitchIds($VSwitchIds)
 * @method array getVSwitchIds()
 * @method $this setDefaultCooldown($DefaultCooldown)
 * @method integer getDefaultCooldown()
 * @method $this setRemovalPolicy_1($RemovalPolicy_1)
 * @method string getRemovalPolicy_1()
 * @method $this setRemovalPolicy_2($RemovalPolicy_2)
 * @method string getRemovalPolicy_2()
 * @method $this setActiveScalingConfigurationId($ActiveScalingConfigurationId)
 * @method string getActiveScalingConfigurationId()
 * @method $this setHealthCheckType($HealthCheckType)
 * @method string getHealthCheckType()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method string getLaunchTemplateId()
 * @method $this setLaunchTemplateVersion($LaunchTemplateVersion)
 * @method string getLaunchTemplateVersion()
 */
final class ModifyScalingGroup extends EssCommon
{
    public $action = 'ModifyScalingGroup';
}
