<?php
namespace aliyun\sdk\services\CloudAPI;

use aliyun\sdk\core\http\Request;

class CloudAPICommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'cloudapi';

    public $version = '2016-07-14';

    public $locationServiceCode = 'apigateway';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-northeast-1' => 'apigateway.ap-northeast-1.aliyuncs.com',
    	'us-west-1' => 'apigateway.us-west-1.aliyuncs.com',
    ];
}
