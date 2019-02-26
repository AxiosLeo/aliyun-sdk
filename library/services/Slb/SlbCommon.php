<?php
namespace aliyun\sdk\services\Slb;

use aliyun\sdk\core\http\Request;

class SlbCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'slb';

    public $version = '2014-05-15';

    public $locationServiceCode = 'slb';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
