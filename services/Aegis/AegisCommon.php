<?php
namespace aliyun\sdk\services\Aegis;

use aliyun\sdk\core\http\Request;

class AegisCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'aegis';

    public $version = '2016-11-11';

    public $locationServiceCode = 'vipaegis';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
