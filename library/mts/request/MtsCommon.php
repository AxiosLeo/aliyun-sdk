<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/1 17:25
 */

namespace aliyun\sdk\mts\request;

use aliyun\sdk\core\http\Request;

class MtsCommon extends Request
{
    public function __construct()
    {
        $this->product = 'mts';

        parent::__construct();

        $this->setParam('Version', '2014-06-18');

        $this->locationServiceCode = $this->product;

        $this->locationEndpointType = 'openAPI';
    }
}
