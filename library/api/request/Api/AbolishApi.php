<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 14:35
 */

namespace aliyun\sdk\api\request\Api;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\api\traits\ApiIdParam;
use aliyun\sdk\api\traits\StageNameParam;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class AbolishApi
 * @package aliyun\sdk\api\request\Api
 */
class AbolishApi extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use ApiIdParam;
    use StageNameParam;
}