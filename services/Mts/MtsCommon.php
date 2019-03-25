<?php
namespace aliyun\sdk\services\Mts;

use aliyun\sdk\core\lib\Request;

class MtsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'mts';

    public $version = '2014-06-18';

    public $locationServiceCode = 'mts';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
