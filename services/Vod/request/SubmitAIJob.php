<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setTypes($Types)
 * @method string getTypes()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIJob extends VodCommon
{
    public $action = 'SubmitAIJob';
}
