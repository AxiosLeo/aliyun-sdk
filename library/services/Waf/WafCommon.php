<?php
namespace aliyun\sdk\services\Waf;

use aliyun\sdk\core\http\Request;

class WafCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'waf';

    public $version = '2016-07-18';

    public $locationServiceCode = 'waf';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
