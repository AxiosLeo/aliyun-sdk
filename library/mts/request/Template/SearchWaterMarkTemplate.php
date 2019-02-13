<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:54
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\PageNumberParamTrait;
use aliyun\sdk\core\traits\param\PageSizeParamTrait;
use aliyun\sdk\core\traits\param\StateParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SearchWaterMarkTemplate.
 */
class SearchWaterMarkTemplate extends MtsCommon
{
    use Request;
    use PageNumberParamTrait;
    use PageSizeParamTrait;
    use StateParamTrait;
}
