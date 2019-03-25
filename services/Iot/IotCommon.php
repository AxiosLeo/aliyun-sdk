<?php
namespace aliyun\sdk\services\Iot;

use aliyun\sdk\core\lib\Request;

class IotCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'iot';

    public $version = '2018-01-20';

    public $locationServiceCode = 'iot';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
