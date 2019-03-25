<?php
namespace aliyun\sdk\services\Cr;

use aliyun\sdk\core\lib\Request;

class CrCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cr';

    public $version = '2016-06-07';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
