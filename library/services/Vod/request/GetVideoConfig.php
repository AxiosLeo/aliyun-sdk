<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setAuthInfo($AuthInfo)
 * @method string getAuthInfo()
 */
final class GetVideoConfig extends VodCommon
{
    public $action = 'GetVideoConfig';
}
