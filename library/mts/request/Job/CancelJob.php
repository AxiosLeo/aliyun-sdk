<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:19
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\JobIdParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class CancelJob.
 */
class CancelJob extends MtsCommon
{
    use Request;

    use JobIdParamTrait;
}
