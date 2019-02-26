<?php
namespace aliyun\sdk\services\ITaaS;

use aliyun\sdk\core\http\Request;

class ITaaSCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'itaas';

    public $version = '2017-05-09';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
