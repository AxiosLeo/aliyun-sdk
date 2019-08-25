<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CcsClient
 *
 * @package aliyun\sdk\services
 * @method Ccs20171001\V20171001 V20171001() static
 */
class Ccs extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ccs";

    protected $service_code = "ccs";

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
            "ap-northeast-1" => "ccs.aliyuncs.com",
            "ap-south-1"     => "ccs.aliyuncs.com",
            "ap-southeast-1" => "ccs.aliyuncs.com",
            "ap-southeast-2" => "ccs.aliyuncs.com",
            "ap-southeast-3" => "ccs.aliyuncs.com",
            "ap-southeast-5" => "ccs.aliyuncs.com",
            "cn-beijing"     => "ccs.aliyuncs.com",
            "cn-chengdu"     => "ccs.aliyuncs.com",
            "cn-hangzhou"    => "ccs.aliyuncs.com",
            "cn-hongkong"    => "ccs.aliyuncs.com",
            "cn-huhehaote"   => "ccs.aliyuncs.com",
            "cn-qingdao"     => "ccs.aliyuncs.com",
            "cn-shanghai"    => "ccs.aliyuncs.com",
            "cn-shenzhen"    => "ccs.aliyuncs.com",
            "cn-zhangjiakou" => "ccs.aliyuncs.com",
            "eu-central-1"   => "ccs.aliyuncs.com",
            "eu-west-1"      => "ccs.aliyuncs.com",
            "me-east-1"      => "ccs.aliyuncs.com",
            "us-east-1"      => "ccs.aliyuncs.com",
            "us-west-1"      => "ccs.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
