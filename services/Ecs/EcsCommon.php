<?php
namespace aliyun\sdk\services\Ecs;

use aliyun\sdk\core\lib\Request;

class EcsCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'ecs';

    public $version = '2014-05-26';

    public $locationServiceCode = 'ecs';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-northeast-1' => 'ecs.ap-northeast-1.aliyuncs.com',
    	'ap-south-1' => 'ecs.ap-south-1.aliyuncs.com',
    	'ap-southeast-1' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'ap-southeast-2' => 'ecs.ap-southeast-2.aliyuncs.com',
    	'ap-southeast-3' => 'ecs.ap-southeast-3.aliyuncs.com',
    	'ap-southeast-5' => 'ecs.ap-southeast-5.aliyuncs.com',
    	'cn-beijing' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-hangzhou' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-hongkong' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-huhehaote' => 'ecs.cn-huhehaote.aliyuncs.com',
    	'cn-qingdao' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-shanghai' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-shenzhen' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'cn-zhangjiakou' => 'ecs.cn-zhangjiakou.aliyuncs.com',
    	'eu-central-1' => 'ecs.eu-central-1.aliyuncs.com',
    	'me-east-1' => 'ecs.me-east-1.aliyuncs.com',
    	'us-east-1' => 'ecs-cn-hangzhou.aliyuncs.com',
    	'us-west-1' => 'ecs-cn-hangzhou.aliyuncs.com',
    ];
}
