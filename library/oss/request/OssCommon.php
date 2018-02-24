<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 11:21
 */
namespace aliyun\sdk\oss\request;

use aliyun\sdk\core\http\Request;

class OssCommon extends Request
{
    public function __construct()
    {
        $this->product = "oss";

        parent::__construct();

        $this->setVersion("2017-03-21");

        $this->locationServiceCode = "oss";

        $this->locationEndpointType = "openAPI";
    }
}