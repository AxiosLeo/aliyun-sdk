<?php
namespace aliyun\sdk\services\Agency;

use aliyun\sdk\core\lib\Request;

class AgencyCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'agency';

    public $version = '2018-07-03';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
