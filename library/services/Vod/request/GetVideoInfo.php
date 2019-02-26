<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setResultTypes($ResultTypes)
 * @method string getResultTypes()
 */
final class GetVideoInfo extends VodCommon
{
    public $action = 'GetVideoInfo';
}
