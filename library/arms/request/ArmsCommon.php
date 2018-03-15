<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:03
 */

namespace aliyun\sdk\arms\request;

use aliyun\sdk\core\http\Request;

class ArmsCommon extends Request
{
    public function __construct()
    {
        $this->product = "arms";

        parent::__construct();

        $this->setParam("Version","2016-11-25");

        $this->locationServiceCode = $this->product;

        $this->locationEndpointType = "openAPI";

        $this->auth = false;
    }
}