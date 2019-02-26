<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoTerrorismRecogConfig($AIVideoTerrorismRecogConfig)
 * @method string getAIVideoTerrorismRecogConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoTerrorismRecogJob extends VodCommon
{
    public $action = 'SubmitAIVideoTerrorismRecogJob';
}
