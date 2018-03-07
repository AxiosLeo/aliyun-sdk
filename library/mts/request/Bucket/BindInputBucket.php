<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:29
 */

namespace aliyun\sdk\mts\request\Bucket;

use aliyun\sdk\core\traits\param\BucketParamTrait;
use aliyun\sdk\mts\request\MtsCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class BindInputBucket
 * @package aliyun\sdk\mts\request\Bucket
 */
class BindInputBucket extends MtsCommon
{
    use Request;
    use BucketParamTrait;
}