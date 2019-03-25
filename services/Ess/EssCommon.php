<?php
namespace aliyun\sdk\services\Ess;

use aliyun\sdk\core\lib\Request;

class EssCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ess';

    public $version = '2014-08-28';

    public $locationServiceCode = 'ess';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
