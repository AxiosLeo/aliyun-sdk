<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoPornRecogConfig($AIVideoPornRecogConfig)
 * @method string getAIVideoPornRecogConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoPornRecogJob extends VodCommon
{
    public $action = 'SubmitAIVideoPornRecogJob';
}
