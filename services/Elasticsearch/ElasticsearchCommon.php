<?php
namespace aliyun\sdk\services\Elasticsearch;

use aliyun\sdk\core\http\Request;

class ElasticsearchCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'elasticsearch';

    public $version = '2017-06-13';

    public $locationServiceCode = 'elasticsearch';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
