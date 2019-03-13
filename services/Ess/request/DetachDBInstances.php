<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setDBInstance($DBInstance)
 * @method array getDBInstance()
 * @method $this setForceDetach($ForceDetach)
 * @method boolean getForceDetach()
 */
final class DetachDBInstances extends EssCommon
{
    public $action = 'DetachDBInstances';
}
