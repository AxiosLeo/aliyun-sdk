<?php
namespace aliyun\sdk\services\Jaq;

use aliyun\sdk\core\lib\Request;

class JaqCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'jaq';

    public $version = '2016-11-23';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
