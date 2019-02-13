<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:54
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetVideoPlayAuth.
 *
 * @method $this setVideoId($video_id)
 * @method $this setAuthInfoTimeout($auth_info_timeout)
 */
class GetVideoPlayAuth extends VodCommon
{
    use Request;
}
