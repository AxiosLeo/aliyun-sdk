<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 11:02
 */

namespace aliyun\sdk\api\request\Group;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\DescriptionParamTrait;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\param\GroupNameParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class ModifyApiGroup
 * @package aliyun\sdk\api\request\Group
 */
class ModifyApiGroup extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use GroupNameParamTrait;
    use DescriptionParamTrait;
}