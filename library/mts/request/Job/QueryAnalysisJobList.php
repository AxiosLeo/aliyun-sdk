<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:10
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\AnalysisJobIdsParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class QueryAnalysisJobList.
 */
class QueryAnalysisJobList extends MtsCommon
{
    use Request;

    use AnalysisJobIdsParamTrait;
}
