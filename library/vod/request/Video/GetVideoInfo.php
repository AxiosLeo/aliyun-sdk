<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:09
 */
namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetInfo
 * @package aliyun\sdk\vod\request\Video
 * @method $this setVideoId($video_id)
 */
class GetVideoInfo extends VodCommon
{
    use Request;
}