<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OpenSearchClient
 *
 * @package aliyun\sdk\services
 * @method OpenSearch20171225\V20171225 V20171225() static
 */
class OpenSearch extends ProductAbstract
{
    use ProductTrait;

    protected $product = "OpenSearch";

    protected $service_code = "opensearch";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
        ],
        "public"   => [
            "cn-beijing"     => "opensearch.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "opensearch.cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "opensearch.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "opensearch.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "opensearch.cn-shenzhen.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
