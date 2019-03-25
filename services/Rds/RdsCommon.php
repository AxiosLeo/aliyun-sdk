<?php
namespace aliyun\sdk\services\Rds;

use aliyun\sdk\core\lib\Request;

class RdsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'rds';

    public $version = '2014-08-15';

    public $locationServiceCode = 'rds';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
