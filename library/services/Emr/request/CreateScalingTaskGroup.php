<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setMinSize($MinSize)
 * @method integer getMinSize()
 * @method $this setMaxSize($MaxSize)
 * @method integer getMaxSize()
 * @method $this setDefaultCooldown($DefaultCooldown)
 * @method integer getDefaultCooldown()
 * @method $this setActiveRuleCategory($ActiveRuleCategory)
 * @method string getActiveRuleCategory()
 * @method $this setInstanceTypeList($InstanceTypeList)
 * @method array getInstanceTypeList()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setDataDiskCategory($DataDiskCategory)
 * @method string getDataDiskCategory()
 * @method $this setDataDiskSize($DataDiskSize)
 * @method integer getDataDiskSize()
 * @method $this setDataDiskCount($DataDiskCount)
 * @method integer getDataDiskCount()
 * @method $this setSpotStrategy($SpotStrategy)
 * @method string getSpotStrategy()
 * @method $this setSpotPriceLimits($SpotPriceLimits)
 * @method array getSpotPriceLimits()
 * @method $this setScalingRule($ScalingRule)
 * @method array getScalingRule()
 */
final class CreateScalingTaskGroup extends EmrCommon
{
    public $action = 'CreateScalingTaskGroup';
}
