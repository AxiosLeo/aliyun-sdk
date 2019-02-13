<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:47
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\InputParamTrait;
use aliyun\sdk\core\traits\param\PipelineIdParamTrait;
use aliyun\sdk\core\traits\param\SnapshotConfigParamTrait;
use aliyun\sdk\core\traits\param\UserDataParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SubmitSnapshotJob.
 */
class SubmitSnapshotJob extends MtsCommon
{
    use Request;
    use InputParamTrait;
    use PipelineIdParamTrait;
    use UserDataParamTrait;
    use SnapshotConfigParamTrait;
}
