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
 * @method $this setHostGroupId($HostGroupId)
 * @method string getHostGroupId()
 * @method $this setMinSize($MinSize)
 * @method integer getMinSize()
 * @method $this setMaxSize($MaxSize)
 * @method integer getMaxSize()
 * @method $this setDefaultCooldown($DefaultCooldown)
 * @method integer getDefaultCooldown()
 * @method $this setActiveRuleCategory($ActiveRuleCategory)
 * @method string getActiveRuleCategory()
 */
final class ModifyScalingTaskGroup extends EmrCommon
{
    public $action = 'ModifyScalingTaskGroup';
}
