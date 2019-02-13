<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:13
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class UpdateVideoInfo.
 *
 * @method $this setVideoId($video_id)
 * @method $this setTitle($title)
 * @method $this setDescription($desc)
 * @method $this setCoverURL($cover_url)
 * @method $this setCateId($cate_id)
 * @method $this setTags($tags)
 */
class UpdateVideoInfo extends VodCommon
{
    use Request;
}
