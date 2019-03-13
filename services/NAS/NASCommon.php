<?php
namespace aliyun\sdk\services\NAS;

use aliyun\sdk\core\http\Request;

class NASCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'nas';

    public $version = '2017-06-26';

    public $locationServiceCode = 'nas';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
