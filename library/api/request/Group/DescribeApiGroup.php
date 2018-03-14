<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 11:15
 */

namespace aliyun\sdk\api\request\Group;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeApiGroup
 * @package aliyun\sdk\ecs\request\Group
 */
class DescribeApiGroup extends APICommon
{
    use Request;
    use GroupIdParamTrait;
}