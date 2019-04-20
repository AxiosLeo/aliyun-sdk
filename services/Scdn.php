<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ScdnClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Scdn20171115\V20171115 V20171115() static
 */
class Scdn extends ProductAbstract
{
    use ProductTrait;

    protected $product = "scdn";

    protected $service_code = "scdn";

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
            "ap-northeast-1" => "scdn.aliyuncs.com",
            "ap-south-1"     => "scdn.aliyuncs.com",
            "ap-southeast-1" => "scdn.aliyuncs.com",
            "ap-southeast-2" => "scdn.aliyuncs.com",
            "ap-southeast-3" => "scdn.aliyuncs.com",
            "ap-southeast-5" => "scdn.aliyuncs.com",
            "cn-beijing"     => "scdn.aliyuncs.com",
            "cn-chengdu"     => "scdn.aliyuncs.com",
            "cn-hangzhou"    => "scdn.aliyuncs.com",
            "cn-hongkong"    => "scdn.aliyuncs.com",
            "cn-huhehaote"   => "scdn.aliyuncs.com",
            "cn-qingdao"     => "scdn.aliyuncs.com",
            "cn-shanghai"    => "scdn.aliyuncs.com",
            "cn-shenzhen"    => "scdn.aliyuncs.com",
            "cn-zhangjiakou" => "scdn.aliyuncs.com",
            "eu-central-1"   => "scdn.aliyuncs.com",
            "eu-west-1"      => "scdn.aliyuncs.com",
            "me-east-1"      => "scdn.aliyuncs.com",
            "us-east-1"      => "scdn.aliyuncs.com",
            "us-west-1"      => "scdn.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}