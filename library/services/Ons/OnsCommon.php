<?php
namespace aliyun\sdk\services\Ons;

use aliyun\sdk\core\http\Request;

class OnsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ons';

    public $version = '2016-05-03';

    public $locationServiceCode = 'ons';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
