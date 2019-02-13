<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:34
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\AudioParamTrait;
use aliyun\sdk\core\traits\param\ContainerParamTrait;
use aliyun\sdk\core\traits\param\MuxConfigParamTrait;
use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\core\traits\param\TransConfigParamTrait;
use aliyun\sdk\core\traits\param\VideoParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class AddTemplate.
 */
class AddTemplate extends MtsCommon
{
    use Request;
    use NameParamTrait;
    use ContainerParamTrait;
    use VideoParamTrait;
    use AudioParamTrait;
    use TransConfigParamTrait;
    use MuxConfigParamTrait;
}
