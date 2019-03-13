<?php
namespace aliyun\sdk\services\Vod;

use aliyun\sdk\core\http\Request;

class VodCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'vod';

    public $version = '2017-03-21';

    public $locationServiceCode = 'vod';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
