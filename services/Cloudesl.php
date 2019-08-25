<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudeslClient
 *
 * @package aliyun\sdk\services
 * @method Cloudesl20180801\V20180801 V20180801() static
 */
class Cloudesl extends ProductAbstract
{
    use ProductTrait;

    protected $product = "cloudesl";

    protected $service_code = "";

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
            "ap-northeast-1" => "cloudesl.aliyuncs.com",
            "ap-south-1"     => "cloudesl.aliyuncs.com",
            "ap-southeast-1" => "cloudesl.aliyuncs.com",
            "ap-southeast-2" => "cloudesl.aliyuncs.com",
            "ap-southeast-3" => "cloudesl.aliyuncs.com",
            "ap-southeast-5" => "cloudesl.aliyuncs.com",
            "cn-beijing"     => "cloudesl.aliyuncs.com",
            "cn-chengdu"     => "cloudesl.aliyuncs.com",
            "cn-hangzhou"    => "cloudesl.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "cloudesl.aliyuncs.com",
            "cn-huhehaote"   => "cloudesl.aliyuncs.com",
            "cn-qingdao"     => "cloudesl.aliyuncs.com",
            "cn-shanghai"    => "cloudesl.aliyuncs.com",
            "cn-shenzhen"    => "cloudesl.aliyuncs.com",
            "cn-zhangjiakou" => "cloudesl.aliyuncs.com",
            "eu-central-1"   => "cloudesl.aliyuncs.com",
            "eu-west-1"      => "cloudesl.aliyuncs.com",
            "me-east-1"      => "cloudesl.aliyuncs.com",
            "us-east-1"      => "cloudesl.aliyuncs.com",
            "us-west-1"      => "cloudesl.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
