<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 10:17
 */

namespace aliyun\sdk\mts\request\Template;

use aliyun\sdk\core\traits\param\ConfigParamTrait;
use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdateWaterMarkTemplate
 * @package aliyun\sdk\mts\request\Template
 * @method $this setWaterMarkTemplateId($WaterMarkTemplateId)
 */
class UpdateWaterMarkTemplate extends MtsCommon
{
    use Request;
    use NameParamTrait;
    use ConfigParamTrait;
}