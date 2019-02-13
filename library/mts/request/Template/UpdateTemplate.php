<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:38
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\AudioParamTrait;
use aliyun\sdk\core\traits\param\ContainerParamTrait;
use aliyun\sdk\core\traits\param\MuxConfigParamTrait;
use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\core\traits\param\TemplateIdParamTrait;
use aliyun\sdk\core\traits\param\TransConfigParamTrait;
use aliyun\sdk\core\traits\param\VideoParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class UpdateTemplate.
 */
class UpdateTemplate extends MtsCommon
{
    use Request;
    use TemplateIdParamTrait;
    use NameParamTrait;
    use ContainerParamTrait;
    use VideoParamTrait;
    use AudioParamTrait;
    use TransConfigParamTrait;
    use MuxConfigParamTrait;
}
