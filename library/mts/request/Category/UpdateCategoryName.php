<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:25
 */

namespace aliyun\sdk\mts\request\Category;

use aliyun\sdk\core\traits\param\CateIdParamTrait;
use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateCategoryName
 * @package aliyun\sdk\mts\request\Category
 */
class UpdateCategoryName extends MtsCommon
{
    use Request;
    use CateIdParamTrait;
    use NameParamTrait;
}