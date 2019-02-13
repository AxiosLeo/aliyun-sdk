<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:33
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class DeleteStream.
 *
 * @method $this setVideoId($video_id)
 * @method $this setJobIds($job_ids)
 */
class DeleteStream extends VodCommon
{
    use Request;
}
