<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DdsClient
 *
 * @package aliyun\sdk\services
 * @method Dds20151201\V20151201 V20151201() static
 */
class Dds extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dds";

    protected $service_code = "Dds";

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
            "ap-northeast-1" => "mongodb.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "mongodb.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "mongodb.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "mongodb.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "mongodb.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "mongodb.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "mongodb.aliyuncs.com",
            "cn-chengdu"     => "mongodb.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "mongodb.aliyuncs.com",
            "cn-hongkong"    => "mongodb.aliyuncs.com",
            "cn-huhehaote"   => "mongodb.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "mongodb.aliyuncs.com",
            "cn-shanghai"    => "mongodb.aliyuncs.com",
            "cn-shenzhen"    => "mongodb.aliyuncs.com",
            "cn-zhangjiakou" => "mongodb.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "mongodb.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "mongodb.eu-west-1.aliyuncs.com",
            "me-east-1"      => "mongodb.me-east-1.aliyuncs.com",
            "us-east-1"      => "mongodb.aliyuncs.com",
            "us-west-1"      => "mongodb.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}