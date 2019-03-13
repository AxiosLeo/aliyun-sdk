<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setEnabledFeatures($EnabledFeatures)
 * @method array getEnabledFeatures()
 * @method $this setDisabledFeatures($DisabledFeatures)
 * @method array getDisabledFeatures()
 */
final class ToggleFeatures extends CloudPhotoCommon
{
    public $action = 'ToggleFeatures';
}
