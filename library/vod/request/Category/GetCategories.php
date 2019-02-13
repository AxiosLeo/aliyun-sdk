<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:25
 */

namespace aliyun\sdk\vod\request\Category;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class GetCategories.
 *
 * @method $this setCateId($cateId)
 * @method $this setPageNo($page_no)
 * @method $this setPageSize($page_size)
 */
class GetCategories extends VodCommon
{
    use Request;
}
