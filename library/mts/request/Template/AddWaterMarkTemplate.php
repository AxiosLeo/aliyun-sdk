<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:26
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\ConfigParamTrait;
use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class AddWaterMarkTemplate
 * @package aliyun\sdk\mts\request\Template
 */
class AddWaterMarkTemplate extends MtsCommon
{
    use Request;
    use ConfigParamTrait;
    use NameParamTrait;
}