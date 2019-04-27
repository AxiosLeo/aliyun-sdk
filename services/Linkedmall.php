<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LinkedmallClient
 *
 * @package aliyun\sdk\services
 * @method Linkedmall20180116\V20180116 V20180116() static
 */
class Linkedmall extends ProductAbstract
{
    use ProductTrait;

    protected $product = "linkedmall";

    protected $service_code = "linkedmall";

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
            "ap-northeast-1" => "linkedmall.aliyuncs.com",
            "ap-south-1"     => "linkedmall.aliyuncs.com",
            "ap-southeast-1" => "linkedmall.aliyuncs.com",
            "ap-southeast-2" => "linkedmall.aliyuncs.com",
            "ap-southeast-3" => "linkedmall.aliyuncs.com",
            "ap-southeast-5" => "linkedmall.aliyuncs.com",
            "cn-beijing"     => "linkedmall.aliyuncs.com",
            "cn-chengdu"     => "linkedmall.aliyuncs.com",
            "cn-hangzhou"    => "linkedmall.aliyuncs.com",
            "cn-hongkong"    => "linkedmall.aliyuncs.com",
            "cn-huhehaote"   => "linkedmall.aliyuncs.com",
            "cn-qingdao"     => "linkedmall.aliyuncs.com",
            "cn-shanghai"    => "linkedmall.aliyuncs.com",
            "cn-shenzhen"    => "linkedmall.aliyuncs.com",
            "cn-zhangjiakou" => "linkedmall.aliyuncs.com",
            "eu-central-1"   => "linkedmall.aliyuncs.com",
            "eu-west-1"      => "linkedmall.aliyuncs.com",
            "me-east-1"      => "linkedmall.aliyuncs.com",
            "us-east-1"      => "linkedmall.aliyuncs.com",
            "us-west-1"      => "linkedmall.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}