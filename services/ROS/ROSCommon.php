<?php
namespace aliyun\sdk\services\ROS;

use aliyun\sdk\core\lib\Request;

class ROSCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ros';

    public $version = '2015-09-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
