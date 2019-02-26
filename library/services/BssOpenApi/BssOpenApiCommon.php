<?php
namespace aliyun\sdk\services\BssOpenApi;

use aliyun\sdk\core\http\Request;

class BssOpenApiCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'bssopenapi';

    public $version = '2017-12-14';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
