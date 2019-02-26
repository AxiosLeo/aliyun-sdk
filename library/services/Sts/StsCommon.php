<?php
namespace aliyun\sdk\services\Sts;

use aliyun\sdk\core\http\Request;

class StsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'sts';

    public $version = '2015-04-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
