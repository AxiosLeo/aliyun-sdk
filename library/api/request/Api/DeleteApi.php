<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 14:39
 */

namespace aliyun\sdk\api\request\Api;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\api\traits\ApiIdParam;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteApi.
 */
class DeleteApi extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use ApiIdParam;
}
