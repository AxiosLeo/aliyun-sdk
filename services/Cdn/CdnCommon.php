<?php
namespace aliyun\sdk\services\Cdn;

use aliyun\sdk\core\lib\Request;

class CdnCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cdn';

    public $version = '2014-11-11';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
