<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:00
 */

namespace aliyun\sdk\api\request\Domain;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\DomainNameParamTrait;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class ReactivateDomain
 * @package aliyun\sdk\ecs\request\Domain
 */
class ReactivateDomain extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use DomainNameParamTrait;
}