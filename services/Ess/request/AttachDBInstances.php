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
 * @method $this setForceAttach($ForceAttach)
 * @method boolean getForceAttach()
 */
final class AttachDBInstances extends EssCommon
{
    public $action = 'AttachDBInstances';
}
