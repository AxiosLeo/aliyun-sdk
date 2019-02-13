<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:24
 */

namespace aliyun\sdk\mts\request\Category;

use aliyun\sdk\core\traits\param\CateIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteCategory.
 */
class DeleteCategory extends MtsCommon
{
    use Request;
    use CateIdParamTrait;
}
