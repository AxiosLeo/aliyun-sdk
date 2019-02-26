<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIASRConfig($AIASRConfig)
 * @method string getAIASRConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIASRJob extends VodCommon
{
    public $action = 'SubmitAIASRJob';
}
