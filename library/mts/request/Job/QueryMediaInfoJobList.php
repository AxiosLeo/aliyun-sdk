<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 13:57
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\MediaInfoJobIdsParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class QueryMediaInfoJobList
 * @package aliyun\sdk\mts\request\Job
 */
class QueryMediaInfoJobList extends MtsCommon
{
    use Request;

    use MediaInfoJobIdsParamTrait;
}