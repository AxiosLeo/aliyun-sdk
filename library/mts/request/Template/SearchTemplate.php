<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:22
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\core\traits\param\PageNumberParamTrait;
use aliyun\sdk\core\traits\param\PageSizeParamTrait;
use aliyun\sdk\core\traits\param\StateParamTrait;

/**
 * Class SearchTemplate.
 *
 * @method $this setTemplateIds($TemplateIds)
 */
class SearchTemplate extends MtsCommon
{
    use Request;
    use PageNumberParamTrait;
    use PageSizeParamTrait;
    use StateParamTrait;
}
