<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:17
 */

namespace aliyun\sdk\cdn\request;

use aliyun\sdk\core\http\Request;

class CdnCommon extends Request
{
    public function __construct()
    {
        $this->product = "cdn";

        parent::__construct();

        $this->setVersion("2014-11-11");

        $this->locationServiceCode = "cdn";

        $this->locationEndpointType = "openAPI";
    }
}