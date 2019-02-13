<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:22
 */

namespace aliyun\sdk\mts\request\Category;

use aliyun\sdk\core\traits\param\CateNameParamTrait;
use aliyun\sdk\core\traits\param\ParentIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class AddCategory.
 */
class AddCategory extends MtsCommon
{
    use Request;
    use CateNameParamTrait;
    use ParentIdParamTrait;
}
