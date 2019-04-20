<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LiveClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Live20161101\V20161101 V20161101() static
 */
class Live extends ProductAbstract
{
    use ProductTrait;

    protected $product = "live";

    protected $service_code = "live";

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
            "ap-northeast-1" => "live.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "live.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "live.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "live.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "live.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "live.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "live.aliyuncs.com",
            "cn-chengdu"     => "live.aliyuncs.com",
            "cn-hangzhou"    => "live.aliyuncs.com",
            "cn-hongkong"    => "live.aliyuncs.com",
            "cn-huhehaote"   => "live.aliyuncs.com",
            "cn-qingdao"     => "live.aliyuncs.com",
            "cn-shanghai"    => "live.aliyuncs.com",
            "cn-shenzhen"    => "live.aliyuncs.com",
            "cn-zhangjiakou" => "live.aliyuncs.com",
            "eu-central-1"   => "live.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "live.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "live.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "live.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "live.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}