<?php
namespace aliyun\sdk\services\Cloudauth;

use aliyun\sdk\core\lib\Request;

class CloudauthCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cloudauth';

    public $version = '2017-10-10';

    public $locationServiceCode = 'cloudauth';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
