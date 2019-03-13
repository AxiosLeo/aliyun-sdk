<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCoverConfig($AIVideoCoverConfig)
 * @method string getAIVideoCoverConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoCoverJob extends VodCommon
{
    public $action = 'SubmitAIVideoCoverJob';
}
