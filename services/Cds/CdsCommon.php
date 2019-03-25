<?php
namespace aliyun\sdk\services\Cds;

use aliyun\sdk\core\lib\Request;

class CdsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cds';

    public $version = '2017-09-25';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
