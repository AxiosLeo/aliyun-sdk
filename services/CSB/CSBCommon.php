<?php
namespace aliyun\sdk\services\CSB;

use aliyun\sdk\core\lib\Request;

class CSBCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'csb';

    public $version = '2017-11-18';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = ['cn-beijing' => 'csb.cn-beijing.aliyuncs.com', 'cn-hangzhou' => 'csb.cn-hangzhou.aliyuncs.com'];
}
