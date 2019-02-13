<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:50
 */

namespace aliyun\sdk\rds\request;

use aliyun\sdk\core\http\Request;

class RdsCommon extends Request
{
    public function __construct()
    {
        $this->product = 'rds';

        parent::__construct();

        $this->setParam('Version', '2014-08-15');

        $this->auth = false;
    }
}
