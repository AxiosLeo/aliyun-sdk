<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:26
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\PipelineIdParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class ListJob.
 *
 * @method $this setNextPageToken($NextPageToken)
 * @method $this setMaximumPageSize($MaximumPageSize)
 * @method $this setState($State)
 * @method $this setStartOfJobCreatedTimeRange($StartOfJobCreatedTimeRange)
 * @method $this setEndOfJobCreatedTimeRange($EndOfJobCreatedTimeRange)
 */
class ListJob extends MtsCommon
{
    use Request;

    use PipelineIdParamTrait;
}
