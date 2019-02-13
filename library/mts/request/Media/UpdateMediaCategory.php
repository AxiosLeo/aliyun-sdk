<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:29
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\CateIdParamTrait;
use aliyun\sdk\core\traits\param\MediaIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateMediaCategory.
 */
class UpdateMediaCategory extends MtsCommon
{
    use Request;
    use MediaIdParamTrait;
    use CateIdParamTrait;
}
