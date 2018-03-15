<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:48
 */

namespace aliyun\sdk\slb\request;

use aliyun\sdk\core\http\Request;

class SlbCommon extends Request
{
    public function __construct()
    {
        $this->product = "slb";

        parent::__construct();

        $this->setParam("Version","2014-05-15");

        $this->auth = false;
    }
}