<?php
namespace aliyun\sdk\services\Edas;

use aliyun\sdk\core\lib\Request;

class EdasCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'edas';

    public $version = '2017-08-01';

    public $locationServiceCode = 'edas';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
