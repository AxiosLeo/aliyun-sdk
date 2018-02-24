<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:36
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetMezzanineInfo
 * @package aliyun\sdk\vod\request\Video
 * @method $this setVideoId($video_id)
 * @method $this setAuthTimeout($auth_timeout)
 */
class GetMezzanineInfo extends VodCommon
{
    use Request;
}