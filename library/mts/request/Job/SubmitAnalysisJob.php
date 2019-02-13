<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:04
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\InputParamTrait;
use aliyun\sdk\core\traits\param\PipelineIdParamTrait;
use aliyun\sdk\core\traits\param\PriorityParamTrait;
use aliyun\sdk\core\traits\param\UserDataParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class SubmitAnalysisJob.
 */
class SubmitAnalysisJob extends MtsCommon
{
    use Request;

    use InputParamTrait;

    use UserDataParamTrait;

    use PriorityParamTrait;

    use PipelineIdParamTrait;
}
