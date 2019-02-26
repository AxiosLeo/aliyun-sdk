<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setAuthInfoTimeout($AuthInfoTimeout)
 * @method integer getAuthInfoTimeout()
 * @method $this setReAuthInfo($ReAuthInfo)
 * @method string getReAuthInfo()
 * @method $this setPlayConfig($PlayConfig)
 * @method string getPlayConfig()
 */
final class GetVideoPlayAuth extends VodCommon
{
    public $action = 'GetVideoPlayAuth';
}
