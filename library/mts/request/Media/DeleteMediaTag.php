<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 12:45
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\MediaIdParamTrait;
use aliyun\sdk\core\traits\param\TagParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteMediaTag
 * @package aliyun\sdk\mts\request\Media
 */
class DeleteMediaTag extends MtsCommon
{
    use Request;
    use MediaIdParamTrait;
    use TagParamTrait;
}