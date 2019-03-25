<?php
namespace aliyun\sdk\services\CCC;

use aliyun\sdk\core\lib\Request;

class CCCCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ccc';

    public $version = '2017-07-05';

    public $locationServiceCode = 'ccc';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = ['cn-hangzhou' => 'ccc.cn-hangzhou.aliyuncs.com', 'cn-shanghai' => 'ccc.cn-shanghai.aliyuncs.com'];
}
