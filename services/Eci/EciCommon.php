<?php
namespace aliyun\sdk\services\Eci;

use aliyun\sdk\core\lib\Request;

class EciCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'eci';

    public $version = '2018-08-08';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
