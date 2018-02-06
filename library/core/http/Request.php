<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:46
 */

namespace aliyun\sdk\core\http;

class Request extends Parameter
{
    protected $action_name = "";

    protected $product = "";

    protected $locationServiceCode = "";

    protected $locationEndpointType = "";

    public function __construct()
    {

    }
}