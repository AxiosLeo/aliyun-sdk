<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RamClient
 *
 * @package aliyun\sdk\services
 * @method Ram20150501\V20150501 V20150501() static
 */
class Ram extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ram";

    protected $service_code = "ram";

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
            "ap-northeast-1" => "ram.aliyuncs.com",
            "ap-south-1"     => "ram.aliyuncs.com",
            "ap-southeast-1" => "ram.aliyuncs.com",
            "ap-southeast-2" => "ram.aliyuncs.com",
            "ap-southeast-3" => "ram.aliyuncs.com",
            "ap-southeast-5" => "ram.aliyuncs.com",
            "cn-beijing"     => "ram.aliyuncs.com",
            "cn-chengdu"     => "ram.aliyuncs.com",
            "cn-hangzhou"    => "ram.aliyuncs.com",
            "cn-hongkong"    => "ram.aliyuncs.com",
            "cn-huhehaote"   => "ram.aliyuncs.com",
            "cn-qingdao"     => "ram.aliyuncs.com",
            "cn-shanghai"    => "ram.aliyuncs.com",
            "cn-shenzhen"    => "ram.aliyuncs.com",
            "cn-zhangjiakou" => "ram.aliyuncs.com",
            "eu-central-1"   => "ram.aliyuncs.com",
            "eu-west-1"      => "ram.aliyuncs.com",
            "me-east-1"      => "ram.aliyuncs.com",
            "us-east-1"      => "ram.aliyuncs.com",
            "us-west-1"      => "ram.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
