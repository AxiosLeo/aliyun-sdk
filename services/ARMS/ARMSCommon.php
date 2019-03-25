<?php
namespace aliyun\sdk\services\ARMS;

use aliyun\sdk\core\lib\Request;

class ARMSCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'arms';

    public $version = '2016-11-25';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-southeast-1' => 'arms.ap-southeast-1.aliyuncs.com',
    	'cn-beijing' => 'arms.cn-beijing.aliyuncs.com',
    	'cn-hangzhou' => 'arms.cn-hangzhou.aliyuncs.com',
    	'cn-hongkong' => 'arms.cn-hongkong.aliyuncs.com',
    	'cn-qingdao' => 'arms.cn-qingdao.aliyuncs.com',
    	'cn-shanghai' => 'arms.cn-shanghai.aliyuncs.com',
    	'cn-shenzhen' => 'arms.cn-shenzhen.aliyuncs.com',
    ];
}
