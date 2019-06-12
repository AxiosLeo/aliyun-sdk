<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class MarketClient
 *
 * @package aliyun\sdk\services
 * @method Market20151101\V20151101 V20151101() static
 */
class Market extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Market";

    protected $service_code = "market";

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
            "ap-northeast-1" => "market.aliyuncs.com",
            "ap-south-1"     => "market.aliyuncs.com",
            "ap-southeast-1" => "market.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "market.aliyuncs.com",
            "ap-southeast-3" => "market.aliyuncs.com",
            "ap-southeast-5" => "market.aliyuncs.com",
            "cn-beijing"     => "market.aliyuncs.com",
            "cn-chengdu"     => "market.aliyuncs.com",
            "cn-hangzhou"    => "market.aliyuncs.com",
            "cn-hongkong"    => "market.aliyuncs.com",
            "cn-huhehaote"   => "market.aliyuncs.com",
            "cn-qingdao"     => "market.aliyuncs.com",
            "cn-shanghai"    => "market.aliyuncs.com",
            "cn-shenzhen"    => "market.aliyuncs.com",
            "cn-zhangjiakou" => "market.aliyuncs.com",
            "eu-central-1"   => "market.aliyuncs.com",
            "eu-west-1"      => "market.aliyuncs.com",
            "me-east-1"      => "market.aliyuncs.com",
            "us-east-1"      => "market.aliyuncs.com",
            "us-west-1"      => "market.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}