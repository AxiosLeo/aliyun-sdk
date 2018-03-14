<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 10:48
 */

namespace aliyun\sdk\api\request\Group;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\DescriptionParamTrait;
use aliyun\sdk\core\traits\param\GroupNameParamTrait;
use aliyun\sdk\core\traits\param\PageNumberParamTrait;
use aliyun\sdk\core\traits\param\PageSizeParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeApiGroups
 * @package aliyun\sdk\api\request\Group
 */
class DescribeApiGroups extends APICommon
{
    use Request;
    use GroupNameParamTrait;
    use DescriptionParamTrait;
    use PageNumberParamTrait;
    use PageSizeParamTrait;
}