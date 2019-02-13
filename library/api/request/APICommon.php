<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 10:41
 */

namespace aliyun\sdk\api\request;

use aliyun\sdk\core\http\Request;

/**
 * Class APICommon
 * API Document : https://help.aliyun.com/document_detail/43590.html.
 */
class APICommon extends Request
{
    public function __construct()
    {
        $this->product = 'apigateway';

        parent::__construct();

        $this->setParam('Version', '2016-07-14');

        $this->locationServiceCode = $this->product;

        $this->locationEndpointType = 'openAPI';

        $this->auth = false;
    }
}
