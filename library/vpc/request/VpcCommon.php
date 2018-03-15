<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:45
 */

namespace aliyun\sdk\vpc\request;

use aliyun\sdk\core\http\Request;

class VpcCommon extends Request
{
    public function __construct()
    {
        $this->product = "vpc";

        parent::__construct();

        $this->setParam("Version","2016-04-28");

        $this->auth = false;
    }
}