<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:19
 */

namespace aliyun\sdk\mts\request\Media;

use aliyun\sdk\core\traits\param\CateIdParamTrait;
use aliyun\sdk\core\traits\param\CoverURLParamTrait;
use aliyun\sdk\core\traits\param\DescriptionParamTrait;
use aliyun\sdk\core\traits\param\FileURLParamTrait;
use aliyun\sdk\core\traits\param\MediaWorkflowIdParamTrait;
use aliyun\sdk\core\traits\param\TagsParamTrait;
use aliyun\sdk\core\traits\param\TitleParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class AddMedia
 * @package aliyun\sdk\mts\request\Media
 * @method $this setMediaWorkflowUserData($MediaWorkflowUserData)
 */
class AddMedia extends MtsCommon
{
    use Request;
    use FileURLParamTrait;
    use TitleParamTrait;
    use DescriptionParamTrait;
    use CoverURLParamTrait;
    use CateIdParamTrait;
    use TagsParamTrait;
    use MediaWorkflowIdParamTrait;
}