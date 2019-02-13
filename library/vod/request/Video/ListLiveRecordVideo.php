<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:39
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class ListLiveRecordVideo.
 *
 * @method $this setStreamName()
 * @method $this setDomainName()
 * @method $this setAppName()
 * @method $this setStartTime()
 * @method $this setEndTime()
 * @method $this setPageNo()
 * @method $this setPageSize()
 * @method $this setSortBy()
 */
class ListLiveRecordVideo extends VodCommon
{
    use Request;
}
