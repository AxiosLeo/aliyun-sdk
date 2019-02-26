<?php
namespace aliyun\sdk\services\Vpc;

use aliyun\sdk\core\http\Request;

class VpcCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'vpc';

    public $version = '2016-04-28';

    public $locationServiceCode = 'vpc';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
