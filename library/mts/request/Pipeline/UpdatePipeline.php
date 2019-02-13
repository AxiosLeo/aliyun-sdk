<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:41
 */

namespace aliyun\sdk\mts\request\Pipeline;

use aliyun\sdk\core\traits\param\NameParamTrait;
use aliyun\sdk\core\traits\param\NotifyConfigParamTrait;
use aliyun\sdk\core\traits\param\PipelineIdParamTrait;
use aliyun\sdk\core\traits\param\RoleParamTrait;
use aliyun\sdk\core\traits\param\StateParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class UpdatePipeline.
 */
class UpdatePipeline extends MtsCommon
{
    use Request;
    use PipelineIdParamTrait;
    use NameParamTrait;
    use StateParamTrait;
    use NotifyConfigParamTrait;
    use RoleParamTrait;
}
