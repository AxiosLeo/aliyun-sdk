<?php
namespace aliyun\sdk\services\RKvstore;

use aliyun\sdk\core\lib\Request;

class RKvstoreCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'rkvstore';

    public $version = '2015-01-01';

    public $locationServiceCode = 'redisa';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
