<?php
namespace aliyun\sdk\services\Green;

use aliyun\sdk\core\lib\Request;

class GreenCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'green';

    public $version = '2017-01-12';

    public $locationServiceCode = 'green';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
