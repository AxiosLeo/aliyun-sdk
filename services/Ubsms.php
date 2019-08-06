<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class UbsmsClient
 *
 * @package aliyun\sdk\services
 * @method Ubsms20150623\V20150623 V20150623() static
 */
class Ubsms extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ubsms";

    protected $service_code = "ubsms";

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
            "ap-northeast-1" => "ubsms.aliyuncs.com",
            "ap-south-1"     => "ubsms.aliyuncs.com",
            "ap-southeast-1" => "ubsms.aliyuncs.com",
            "ap-southeast-2" => "ubsms.aliyuncs.com",
            "ap-southeast-3" => "ubsms.aliyuncs.com",
            "ap-southeast-5" => "ubsms.aliyuncs.com",
            "cn-beijing"     => "ubsms.aliyuncs.com",
            "cn-chengdu"     => "ubsms.aliyuncs.com",
            "cn-hangzhou"    => "ubsms.aliyuncs.com",
            "cn-hongkong"    => "ubsms.aliyuncs.com",
            "cn-huhehaote"   => "ubsms.aliyuncs.com",
            "cn-qingdao"     => "ubsms.aliyuncs.com",
            "cn-shanghai"    => "ubsms.aliyuncs.com",
            "cn-shenzhen"    => "ubsms.aliyuncs.com",
            "cn-zhangjiakou" => "ubsms.aliyuncs.com",
            "eu-central-1"   => "ubsms.aliyuncs.com",
            "eu-west-1"      => "ubsms.aliyuncs.com",
            "me-east-1"      => "ubsms.aliyuncs.com",
            "us-east-1"      => "ubsms.aliyuncs.com",
            "us-west-1"      => "ubsms.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}