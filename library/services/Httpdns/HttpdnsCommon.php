<?php
namespace aliyun\sdk\services\Httpdns;

use aliyun\sdk\core\http\Request;

class HttpdnsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'httpdns';

    public $version = '2016-02-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
