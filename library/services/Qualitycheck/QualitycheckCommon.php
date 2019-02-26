<?php
namespace aliyun\sdk\services\Qualitycheck;

use aliyun\sdk\core\http\Request;

class QualitycheckCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'qualitycheck';

    public $version = '2016-08-01';

    public $locationServiceCode = '';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = ['cn-hangzhou' => 'qualitycheck.cn-hangzhou.aliyuncs.com'];
}
