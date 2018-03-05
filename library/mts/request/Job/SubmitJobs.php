<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:13
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\InputParamTrait;
use aliyun\sdk\core\traits\param\OutputBucketParamTrait;
use aliyun\sdk\core\traits\param\OutputLocationParamTrait;
use aliyun\sdk\core\traits\param\OutputsParamTrait;
use aliyun\sdk\core\traits\param\PipelineIdParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class SubmitJobs
 * @package aliyun\sdk\mts\request\Job
 */
class SubmitJobs extends MtsCommon
{
    use Request;

    use InputParamTrait;

    use PipelineIdParamTrait;

    use OutputBucketParamTrait;

    use OutputLocationParamTrait;

    use OutputsParamTrait;
}