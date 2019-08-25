<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AlidnsClient
 *
 * @package aliyun\sdk\services
 * @method Alidns20150109\V20150109 V20150109() static
 */
class Alidns extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Alidns";

    protected $service_code = "alidns";

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
            "ap-northeast-1" => "dns.aliyuncs.com",
            "ap-south-1"     => "dns.aliyuncs.com",
            "ap-southeast-1" => "dns.aliyuncs.com",
            "ap-southeast-2" => "dns.aliyuncs.com",
            "ap-southeast-3" => "dns.aliyuncs.com",
            "ap-southeast-5" => "dns.aliyuncs.com",
            "cn-beijing"     => "dns.aliyuncs.com",
            "cn-chengdu"     => "dns.aliyuncs.com",
            "cn-hangzhou"    => "dns.aliyuncs.com",
            "cn-hongkong"    => "dns.aliyuncs.com",
            "cn-huhehaote"   => "dns.aliyuncs.com",
            "cn-qingdao"     => "dns.aliyuncs.com",
            "cn-shanghai"    => "dns.aliyuncs.com",
            "cn-shenzhen"    => "dns.aliyuncs.com",
            "cn-zhangjiakou" => "dns.aliyuncs.com",
            "eu-central-1"   => "dns.aliyuncs.com",
            "eu-west-1"      => "dns.aliyuncs.com",
            "me-east-1"      => "dns.aliyuncs.com",
            "us-east-1"      => "dns.aliyuncs.com",
            "us-west-1"      => "dns.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
