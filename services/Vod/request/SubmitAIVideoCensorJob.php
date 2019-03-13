<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCensorConfig($AIVideoCensorConfig)
 * @method string getAIVideoCensorConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoCensorJob extends VodCommon
{
    public $action = 'SubmitAIVideoCensorJob';
}
