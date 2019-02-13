<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 14:14
 */

namespace aliyun\sdk\api\request\Api;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\api\traits\ApiIdParam;
use aliyun\sdk\core\traits\Request;
use aliyun\sdk\api\traits\ApiNameParam;
use aliyun\sdk\api\traits\AuthTypeParam;
use aliyun\sdk\api\traits\ErrorCodeSampleParam;
use aliyun\sdk\api\traits\FailResultSampleParam;
use aliyun\sdk\api\traits\OpenIdConnectConfigParam;
use aliyun\sdk\api\traits\RequestConfigParam;
use aliyun\sdk\api\traits\RequestParametersParam;
use aliyun\sdk\api\traits\ResultSampleParam;
use aliyun\sdk\api\traits\ResultTypeParam;
use aliyun\sdk\api\traits\ServiceConfigParam;
use aliyun\sdk\api\traits\ServiceParametersMapParam;
use aliyun\sdk\api\traits\ServiceParametersParam;
use aliyun\sdk\api\traits\VisibilityParam;
use aliyun\sdk\core\traits\param\DescriptionParamTrait;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;

/**
 * Class ModifyApi.
 */
class ModifyApi extends APICommon
{
    use Request;
    use ApiIdParam;
    use GroupIdParamTrait;
    use ApiNameParam;
    use VisibilityParam;
    use DescriptionParamTrait;
    use AuthTypeParam;
    use OpenIdConnectConfigParam;
    use RequestConfigParam;
    use ServiceConfigParam;
    use RequestParametersParam;
    use ServiceParametersParam;
    use ServiceParametersMapParam;
    use ResultTypeParam;
    use ResultSampleParam;
    use FailResultSampleParam;
    use ErrorCodeSampleParam;
}
