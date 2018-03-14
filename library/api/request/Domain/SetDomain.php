<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 11:20
 */

namespace aliyun\sdk\api\request\Domain;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\CertificateBodyParamTrait;
use aliyun\sdk\core\traits\param\CertificateNameParamTrait;
use aliyun\sdk\core\traits\param\DomainNameParamTrait;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\param\PrivateKeyParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetDomain
 * @package aliyun\sdk\ecs\request\Domain
 */
class SetDomain extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use DomainNameParamTrait;
    use CertificateNameParamTrait;
    use CertificateBodyParamTrait;
    use PrivateKeyParamTrait;
}