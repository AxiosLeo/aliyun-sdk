<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 17:23
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\InputParamTrait;
use aliyun\sdk\core\traits\param\UserDataParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class SubmitMediaInfoJob.
 */
class SubmitMediaInfoJob extends MtsCommon
{
    use Request;

    use InputParamTrait;

    use UserDataParamTrait;
}
