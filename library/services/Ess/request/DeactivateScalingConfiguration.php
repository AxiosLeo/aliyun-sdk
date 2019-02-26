<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setScalingConfigurationId($ScalingConfigurationId)
 * @method string getScalingConfigurationId()
 */
final class DeactivateScalingConfiguration extends EssCommon
{
    public $action = 'DeactivateScalingConfiguration';
}
