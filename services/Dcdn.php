<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DcdnClient
 *
 * @package aliyun\sdk\services
 * @method Dcdn20180115\V20180115 V20180115() static
 */
class Dcdn extends ProductAbstract
{
    use ProductTrait;

    protected $product = "dcdn";

    protected $service_code = "dcdn";

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
            "ap-northeast-1" => "dcdn.aliyuncs.com",
            "ap-south-1"     => "dcdn.aliyuncs.com",
            "ap-southeast-1" => "dcdn.aliyuncs.com",
            "ap-southeast-2" => "dcdn.aliyuncs.com",
            "ap-southeast-3" => "dcdn.aliyuncs.com",
            "ap-southeast-5" => "dcdn.aliyuncs.com",
            "cn-beijing"     => "dcdn.aliyuncs.com",
            "cn-chengdu"     => "dcdn.aliyuncs.com",
            "cn-hangzhou"    => "dcdn.aliyuncs.com",
            "cn-hongkong"    => "dcdn.aliyuncs.com",
            "cn-huhehaote"   => "dcdn.aliyuncs.com",
            "cn-qingdao"     => "dcdn.aliyuncs.com",
            "cn-shanghai"    => "dcdn.aliyuncs.com",
            "cn-shenzhen"    => "dcdn.aliyuncs.com",
            "cn-zhangjiakou" => "dcdn.aliyuncs.com",
            "eu-central-1"   => "dcdn.aliyuncs.com",
            "eu-west-1"      => "dcdn.aliyuncs.com",
            "me-east-1"      => "dcdn.aliyuncs.com",
            "us-east-1"      => "dcdn.aliyuncs.com",
            "us-west-1"      => "dcdn.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}