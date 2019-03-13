<?php
namespace aliyun\sdk\services\BatchCompute;

use aliyun\sdk\core\http\Request;

class BatchComputeCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'batchcompute';

    public $version = '2015-11-11';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [
    	'ap-southeast-1' => 'batchcompute.ap-southeast-1.aliyuncs.com',
    	'cn-beijing' => 'batchcompute.cn-beijing.aliyuncs.com',
    	'cn-hangzhou' => 'batchcompute.cn-hangzhou.aliyuncs.com',
    	'cn-huhehaote' => 'batchcompute.cn-huhehaote.aliyuncs.com',
    	'cn-qingdao' => 'batchcompute.cn-qingdao.aliyuncs.com',
    	'cn-shanghai' => 'batchcompute.cn-shanghai.aliyuncs.com',
    	'cn-shenzhen' => 'batchcompute.cn-shenzhen.aliyuncs.com',
    	'cn-zhangjiakou' => 'batchcompute.cn-zhangjiakou.aliyuncs.com',
    	'us-west-1' => 'batchcompute.us-west-1.aliyuncs.com',
    ];
}
