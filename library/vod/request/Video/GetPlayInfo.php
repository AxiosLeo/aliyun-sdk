<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:52
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetPlayInfo
 * @package aliyun\sdk\vod\request\Video
 * @method $this setVideoId($video_id)
 * @method $this setFormats($formats)
 * @method $this setAuthTimeout($auth_timeout)
 * @method $this setStreamType($steam_type)
 * @method $this setDefinition($definition)
 */
class GetPlayInfo extends VodCommon
{
    use Request;
}