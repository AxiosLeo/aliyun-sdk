<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupName($ScalingGroupName)
 * @method string getScalingGroupName()
 * @method $this setLaunchTemplateId($LaunchTemplateId)
 * @method string getLaunchTemplateId()
 * @method $this setLaunchTemplateVersion($LaunchTemplateVersion)
 * @method string getLaunchTemplateVersion()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setMinSize($MinSize)
 * @method integer getMinSize()
 * @method $this setMaxSize($MaxSize)
 * @method integer getMaxSize()
 * @method $this setDefaultCooldown($DefaultCooldown)
 * @method integer getDefaultCooldown()
 * @method $this setLoadBalancerIds($LoadBalancerIds)
 * @method string getLoadBalancerIds()
 * @method $this setDBInstanceIds($DBInstanceIds)
 * @method string getDBInstanceIds()
 * @method $this setRemovalPolicy_1($RemovalPolicy_1)
 * @method string getRemovalPolicy_1()
 * @method $this setRemovalPolicy_2($RemovalPolicy_2)
 * @method string getRemovalPolicy_2()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setVSwitchIds($VSwitchIds)
 * @method array getVSwitchIds()
 * @method $this setMultiAZPolicy($MultiAZPolicy)
 * @method string getMultiAZPolicy()
 * @method $this setHealthCheckType($HealthCheckType)
 * @method string getHealthCheckType()
 * @method $this setLifecycleHook($LifecycleHook)
 * @method array getLifecycleHook()
 * @method $this setVServerGroup($VServerGroup)
 * @method array getVServerGroup()
 * @method $this setScalingPolicy($ScalingPolicy)
 * @method string getScalingPolicy()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateScalingGroup extends EssCommon
{
    public $action = 'CreateScalingGroup';
}
