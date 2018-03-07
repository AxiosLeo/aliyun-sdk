<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 12:40
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\CoverURLParamTrait;
use aliyun\sdk\core\traits\param\MediaIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateMediaCover
 * @package aliyun\sdk\mts\request\Media
 */
class UpdateMediaCover extends MtsCommon
{
    use Request;
    use MediaIdParamTrait;
    use CoverURLParamTrait;
}