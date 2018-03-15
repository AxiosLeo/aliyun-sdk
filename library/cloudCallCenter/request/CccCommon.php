<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:33
 */

namespace aliyun\sdk\cloudCallCenter\request;

use aliyun\sdk\core\http\Request;

class CccCommon extends Request
{
    public function __construct()
    {
        $this->product = "ccc";

        parent::__construct();

        $this->setParam("Version","2017-07-05");

        $this->auth = false;
    }
}