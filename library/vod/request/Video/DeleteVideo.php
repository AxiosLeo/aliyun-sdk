<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:25
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class DeleteVideo
 * @package aliyun\sdk\vod\request\Video
 * @method $this setVideoIds($video_ids)
 */
class DeleteVideo extends VodCommon
{
    use Request;
}