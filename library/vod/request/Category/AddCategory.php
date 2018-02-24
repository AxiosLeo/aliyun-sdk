<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:43
 */

namespace aliyun\sdk\vod\request\Category;

use aliyun\sdk\core\traits\Request;
use aliyun\sdk\vod\request\VodCommon;

/**
 * Class AddCategory
 * @package aliyun\sdk\vod\request\Category
 * @method $this setCateName($cate_name)
 * @method $this setParentId($parent_id)
 */
class AddCategory extends VodCommon
{
    use Request;
}