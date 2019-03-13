<?php
namespace aliyun\sdk\services\Alidns;

use aliyun\sdk\core\http\Request;

class AlidnsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'alidns';

    public $version = '2015-01-09';

    public $locationServiceCode = 'alidns';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
