<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CdnClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Cdn20180510\V20180510 V20180510() static
 * @method \aliyun\sdk\services\Cdn20141111\V20141111 V20141111() static
 */
class Cdn extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Cdn";

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
            "ap-northeast-1" => "cdn.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "cdn.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "cdn.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "cdn.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "cdn.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "cdn.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "cdn.aliyuncs.com",
            "cn-chengdu"     => "cdn.aliyuncs.com",
            "cn-hangzhou"    => "cdn.aliyuncs.com",
            "cn-hongkong"    => "cdn.aliyuncs.com",
            "cn-huhehaote"   => "cdn.aliyuncs.com",
            "cn-qingdao"     => "cdn.aliyuncs.com",
            "cn-shanghai"    => "cdn.aliyuncs.com",
            "cn-shenzhen"    => "cdn.aliyuncs.com",
            "cn-zhangjiakou" => "cdn.aliyuncs.com",
            "eu-central-1"   => "cdn.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "cdn.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "cdn.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "cdn.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "cdn.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}