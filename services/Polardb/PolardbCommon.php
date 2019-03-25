<?php
namespace aliyun\sdk\services\Polardb;

use aliyun\sdk\core\lib\Request;

class PolardbCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'polardb';

    public $version = '2017-08-01';

    public $locationServiceCode = 'polardb';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-south-1' => 'polardb.ap-south-1.aliyuncs.com',
    	'ap-southeast-5' => 'polardb.ap-southeast-5.aliyuncs.com',
    ];
}
