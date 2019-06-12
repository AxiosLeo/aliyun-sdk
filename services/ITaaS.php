<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ITaaSClient
 *
 * @package aliyun\sdk\services
 * @method ITaaS20170512\V20170512 V20170512() static
 * @method ITaaS20170509\V20170509 V20170509() static
 * @method ITaaS20170505\V20170505 V20170505() static
 */
class ITaaS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ITaaS";

    protected $service_code = "itaas";

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
            "ap-northeast-1" => "itaas.aliyuncs.com",
            "ap-south-1"     => "itaas.aliyuncs.com",
            "ap-southeast-1" => "itaas.aliyuncs.com",
            "ap-southeast-2" => "itaas.aliyuncs.com",
            "ap-southeast-3" => "itaas.aliyuncs.com",
            "ap-southeast-5" => "itaas.aliyuncs.com",
            "cn-beijing"     => "itaas.aliyuncs.com",
            "cn-chengdu"     => "itaas.aliyuncs.com",
            "cn-hangzhou"    => "itaas.aliyuncs.com",
            "cn-hongkong"    => "itaas.aliyuncs.com",
            "cn-huhehaote"   => "itaas.aliyuncs.com",
            "cn-qingdao"     => "itaas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "itaas.aliyuncs.com",
            "cn-shenzhen"    => "itaas.aliyuncs.com",
            "cn-zhangjiakou" => "itaas.aliyuncs.com",
            "eu-central-1"   => "itaas.aliyuncs.com",
            "eu-west-1"      => "itaas.aliyuncs.com",
            "me-east-1"      => "itaas.aliyuncs.com",
            "us-east-1"      => "itaas.aliyuncs.com",
            "us-west-1"      => "itaas.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}