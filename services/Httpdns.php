<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class HttpdnsClient
 *
 * @package aliyun\sdk\services
 * @method Httpdns20160201\V20160201 V20160201() static
 */
class Httpdns extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Httpdns";

    protected $service_code = "httpdns";

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
            "ap-northeast-1" => "httpdns-api.aliyuncs.com",
            "ap-south-1"     => "httpdns-api.aliyuncs.com",
            "ap-southeast-1" => "httpdns-api.aliyuncs.com",
            "ap-southeast-2" => "httpdns-api.aliyuncs.com",
            "ap-southeast-3" => "httpdns-api.aliyuncs.com",
            "ap-southeast-5" => "httpdns-api.aliyuncs.com",
            "cn-beijing"     => "httpdns-api.aliyuncs.com",
            "cn-chengdu"     => "httpdns-api.aliyuncs.com",
            "cn-hangzhou"    => "httpdns-api.aliyuncs.com",
            "cn-hongkong"    => "httpdns-api.aliyuncs.com",
            "cn-huhehaote"   => "httpdns-api.aliyuncs.com",
            "cn-qingdao"     => "httpdns-api.aliyuncs.com",
            "cn-shanghai"    => "httpdns-api.aliyuncs.com",
            "cn-shenzhen"    => "httpdns-api.aliyuncs.com",
            "cn-zhangjiakou" => "httpdns-api.aliyuncs.com",
            "eu-central-1"   => "httpdns-api.aliyuncs.com",
            "eu-west-1"      => "httpdns-api.aliyuncs.com",
            "me-east-1"      => "httpdns-api.aliyuncs.com",
            "us-east-1"      => "httpdns-api.aliyuncs.com",
            "us-west-1"      => "httpdns-api.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}