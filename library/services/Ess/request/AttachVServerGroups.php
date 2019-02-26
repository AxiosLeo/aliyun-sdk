<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setVServerGroup($VServerGroup)
 * @method array getVServerGroup()
 * @method $this setForceAttach($ForceAttach)
 * @method boolean getForceAttach()
 */
final class AttachVServerGroups extends EssCommon
{
    public $action = 'AttachVServerGroups';
}
