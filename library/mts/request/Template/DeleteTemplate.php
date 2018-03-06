<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:22
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\TemplateIdParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteTemplate
 * @package aliyun\sdk\mts\request\Template
 */
class DeleteTemplate extends MtsCommon
{
    use Request;
    use TemplateIdParamTrait;
}