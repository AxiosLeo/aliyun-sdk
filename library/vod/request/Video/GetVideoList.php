<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:28
 */

namespace aliyun\sdk\vod\request\Video;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetVideoList.
 *
 * @method $this setStatus($status)
 * @method $this setStartTime($start_time)
 * @method $this setEndTime($end_time)
 * @method $this setCateId($cate_id)
 * @method $this setPageNo($page_no)
 * @method $this setPageSize($page_size)
 * @method $this setSortBy($sort_by)
 */
class GetVideoList extends VodCommon
{
    use Request;
}
