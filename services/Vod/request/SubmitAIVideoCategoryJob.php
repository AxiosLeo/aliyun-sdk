<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setAIVideoCategoryConfig($AIVideoCategoryConfig)
 * @method string getAIVideoCategoryConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class SubmitAIVideoCategoryJob extends VodCommon
{
    public $action = 'SubmitAIVideoCategoryJob';
}
