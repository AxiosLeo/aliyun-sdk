<?php
namespace aliyun\sdk\services\CS;

use aliyun\sdk\core\lib\Request;

class CSCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cs';

    public $version = '2015-12-15';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
