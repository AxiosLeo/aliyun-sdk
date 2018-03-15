<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:37
 */

namespace aliyun\sdk\alidns\request;

use aliyun\sdk\core\http\Request;

class AlidnsCommon extends Request
{
    public function __construct()
    {
        $this->product = "alidns";

        parent::__construct();

        $this->setParam("Version","2015-01-09");

        $this->locationServiceCode = $this->product;

        $this->locationEndpointType = "openAPI";

        $this->auth = false;
    }
}