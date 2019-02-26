<?php
namespace aliyun\sdk\services\Kms;

use aliyun\sdk\core\http\Request;

class KmsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'kms';

    public $version = '2016-01-20';

    public $locationServiceCode = 'kms';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
