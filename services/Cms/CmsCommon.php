<?php
namespace aliyun\sdk\services\Cms;

use aliyun\sdk\core\lib\Request;

class CmsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cms';

    public $version = '2017-03-01';

    public $locationServiceCode = 'cms';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
