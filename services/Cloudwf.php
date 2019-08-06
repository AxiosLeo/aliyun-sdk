<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudwfClient
 *
 * @package aliyun\sdk\services
 * @method Cloudwf20170328\V20170328 V20170328() static
 */
class Cloudwf extends ProductAbstract
{
    use ProductTrait;

    protected $product = "cloudwf";

    protected $service_code = "cloudwf";

    protected $credential = "RpcCredential";

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
            "ap-northeast-1" => "cloudwf.aliyuncs.com",
            "ap-south-1"     => "cloudwf.aliyuncs.com",
            "ap-southeast-1" => "cloudwf.aliyuncs.com",
            "ap-southeast-2" => "cloudwf.aliyuncs.com",
            "ap-southeast-3" => "cloudwf.aliyuncs.com",
            "ap-southeast-5" => "cloudwf.aliyuncs.com",
            "cn-beijing"     => "cloudwf.aliyuncs.com",
            "cn-chengdu"     => "cloudwf.aliyuncs.com",
            "cn-hangzhou"    => "cloudwf.aliyuncs.com",
            "cn-hongkong"    => "cloudwf.aliyuncs.com",
            "cn-huhehaote"   => "cloudwf.aliyuncs.com",
            "cn-qingdao"     => "cloudwf.aliyuncs.com",
            "cn-shanghai"    => "cloudwf.aliyuncs.com",
            "cn-shenzhen"    => "cloudwf.aliyuncs.com",
            "cn-zhangjiakou" => "cloudwf.aliyuncs.com",
            "eu-central-1"   => "cloudwf.aliyuncs.com",
            "eu-west-1"      => "cloudwf.aliyuncs.com",
            "me-east-1"      => "cloudwf.aliyuncs.com",
            "us-east-1"      => "cloudwf.aliyuncs.com",
            "us-west-1"      => "cloudwf.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}