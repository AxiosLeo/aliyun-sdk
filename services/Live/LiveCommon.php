<?php
namespace aliyun\sdk\services\Live;

use aliyun\sdk\core\lib\Request;

class LiveCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'live';

    public $version = '2016-11-01';

    public $locationServiceCode = 'live';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
