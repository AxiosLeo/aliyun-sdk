<?php
namespace aliyun\sdk\services\Ots;

use aliyun\sdk\core\lib\Request;

class OtsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ots';

    public $version = '2016-06-20';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
