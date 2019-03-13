<?php
namespace aliyun\sdk\services\Drds;

use aliyun\sdk\core\http\Request;

class DrdsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'drds';

    public $version = '2015-04-13';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
