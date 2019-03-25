<?php
namespace aliyun\sdk\services\Ram;

use aliyun\sdk\core\lib\Request;

class RamCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ram';

    public $version = '2015-05-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
