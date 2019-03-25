<?php
namespace aliyun\sdk\services\Emr;

use aliyun\sdk\core\lib\Request;

class EmrCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'emr';

    public $version = '2016-04-08';

    public $locationServiceCode = 'emr';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
