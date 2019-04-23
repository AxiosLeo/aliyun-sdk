<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DomainClient
 *
 * @package aliyun\sdk\services
 * @method Domain2018124\V2018124 V2018124() static
 * @method Domain20180208\V20180208 V20180208() static
 * @method Domain20180129\V20180129 V20180129() static
 * @method Domain20160511\V20160511 V20160511() static
 */
class Domain extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Domain";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-south-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "ap-southeast-3",
            "ap-southeast-5",
            "cn-beijing",
            "cn-chengdu",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "eu-west-1",
            "me-east-1",
            "us-east-1",
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "domain.aliyuncs.com",
            "ap-south-1"     => "domain.aliyuncs.com",
            "ap-southeast-1" => "domain.aliyuncs.com",
            "ap-southeast-2" => "domain.aliyuncs.com",
            "ap-southeast-3" => "domain.aliyuncs.com",
            "ap-southeast-5" => "domain.aliyuncs.com",
            "cn-beijing"     => "domain.aliyuncs.com",
            "cn-chengdu"     => "domain.aliyuncs.com",
            "cn-hangzhou"    => "domain.aliyuncs.com",
            "cn-hongkong"    => "domain.aliyuncs.com",
            "cn-huhehaote"   => "domain.aliyuncs.com",
            "cn-qingdao"     => "domain.aliyuncs.com",
            "cn-shanghai"    => "domain.aliyuncs.com",
            "cn-shenzhen"    => "domain.aliyuncs.com",
            "cn-zhangjiakou" => "domain.aliyuncs.com",
            "eu-central-1"   => "domain.aliyuncs.com",
            "eu-west-1"      => "domain.aliyuncs.com",
            "me-east-1"      => "domain.aliyuncs.com",
            "us-east-1"      => "domain.aliyuncs.com",
            "us-west-1"      => "domain.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}