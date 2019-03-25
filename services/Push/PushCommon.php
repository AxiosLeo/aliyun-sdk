<?php
namespace aliyun\sdk\services\Push;

use aliyun\sdk\core\lib\Request;

class PushCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'push';

    public $version = '2016-08-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
