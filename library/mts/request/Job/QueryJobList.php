<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:22
 */

namespace aliyun\sdk\mts\request\Job;

use aliyun\sdk\core\traits\param\JobIdsParamTrait;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\mts\request\MtsCommon;

/**
 * Class QueryJobList
 * @package aliyun\sdk\mts\request\Job
 */
class QueryJobList extends MtsCommon
{
    use Request;

    use JobIdsParamTrait;
}