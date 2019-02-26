<?php
namespace aliyun\sdk\services\Dm;

use aliyun\sdk\core\http\Request;

class DmCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'dm';

    public $version = '2015-11-23';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-southeast-1' => 'dm.aliyuncs.com',
    	'ap-southeast-2' => 'dm.ap-southeast-2.aliyuncs.com',
    	'cn-beijing' => 'dm.aliyuncs.com',
    	'cn-hangzhou' => 'dm.aliyuncs.com',
    	'cn-hongkong' => 'dm.aliyuncs.com',
    	'cn-qingdao' => 'dm.aliyuncs.com',
    	'cn-shanghai' => 'dm.aliyuncs.com',
    	'cn-shenzhen' => 'dm.aliyuncs.com',
    	'us-east-1' => 'dm.aliyuncs.com',
    	'us-west-1' => 'dm.aliyuncs.com',
    ];
}
