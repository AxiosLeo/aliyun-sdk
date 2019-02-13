<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:46
 */

namespace aliyun\sdk\vod\request\Category;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class UpdateCategory.
 *
 * @method $this setCateId($cate_id)
 * @method $this setCateName($cate_name)
 */
class UpdateCategory extends VodCommon
{
    use Request;
}
