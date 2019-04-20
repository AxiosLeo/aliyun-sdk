<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OpenSearchClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\OpenSearch20171225\V20171225 V20171225() static
 */
class OpenSearch extends ProductAbstract
{
    use ProductTrait;

    protected $product = "OpenSearch";

    protected $service_code = "opensearch";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-2",
            "cn-beijing",
            "cn-chengdu",
            "cn-hangzhou",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "us-east-1",
        ],
        "public"   => [
            "ap-southeast-2" => "opensearch.ap-southeast-2.aliyuncs.com",
            "cn-beijing"     => "opensearch.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "opensearch.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "opensearch.cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "opensearch.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "opensearch.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "opensearch.cn-shenzhen.aliyuncs.com",
            "us-east-1"      => "opensearch.us-east-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}