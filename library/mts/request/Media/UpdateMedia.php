<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:26
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\CateIdParamTrait;
use aliyun\sdk\core\traits\param\CoverURLParamTrait;
use aliyun\sdk\core\traits\param\DescriptionParamTrait;
use aliyun\sdk\core\traits\param\MediaIdParamTrait;
use aliyun\sdk\core\traits\param\TagsParamTrait;
use aliyun\sdk\core\traits\param\TitleParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateMedia.
 */
class UpdateMedia extends MtsCommon
{
    use Request;
    use MediaIdParamTrait;
    use TitleParamTrait;
    use DescriptionParamTrait;
    use CateIdParamTrait;
    use TagsParamTrait;
    use CoverURLParamTrait;
}
