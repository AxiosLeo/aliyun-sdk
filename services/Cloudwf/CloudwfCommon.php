<?php
namespace aliyun\sdk\services\Cloudwf;

use aliyun\sdk\core\lib\Request;

class CloudwfCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cloudwf';

    public $version = '2017-03-28';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
