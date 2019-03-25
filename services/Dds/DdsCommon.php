<?php
namespace aliyun\sdk\services\Dds;

use aliyun\sdk\core\lib\Request;

class DdsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'dds';

    public $version = '2015-12-01';

    public $locationServiceCode = 'dds';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
