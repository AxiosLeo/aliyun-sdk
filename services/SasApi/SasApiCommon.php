<?php
namespace aliyun\sdk\services\SasApi;

use aliyun\sdk\core\lib\Request;

class SasApiCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'sasapi';

    public $version = '2017-07-05';

    public $locationServiceCode = 'sas';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
