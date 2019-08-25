<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class HsmClient
 *
 * @package aliyun\sdk\services
 * @method Hsm20180111\V20180111 V20180111() static
 */
class Hsm extends ProductAbstract
{
    use ProductTrait;

    protected $product = "hsm";

    protected $service_code = "hsm";

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
            "ap-northeast-1" => "hsm.aliyuncs.com",
            "ap-south-1"     => "hsm.aliyuncs.com",
            "ap-southeast-1" => "hsm.aliyuncs.com",
            "ap-southeast-2" => "hsm.aliyuncs.com",
            "ap-southeast-3" => "hsm.aliyuncs.com",
            "ap-southeast-5" => "hsm.aliyuncs.com",
            "cn-beijing"     => "hsm.aliyuncs.com",
            "cn-chengdu"     => "hsm.aliyuncs.com",
            "cn-hangzhou"    => "hsm.aliyuncs.com",
            "cn-hongkong"    => "hsm.aliyuncs.com",
            "cn-huhehaote"   => "hsm.aliyuncs.com",
            "cn-qingdao"     => "hsm.aliyuncs.com",
            "cn-shanghai"    => "hsm.aliyuncs.com",
            "cn-shenzhen"    => "hsm.aliyuncs.com",
            "cn-zhangjiakou" => "hsm.aliyuncs.com",
            "eu-central-1"   => "hsm.aliyuncs.com",
            "eu-west-1"      => "hsm.aliyuncs.com",
            "me-east-1"      => "hsm.aliyuncs.com",
            "us-east-1"      => "hsm.aliyuncs.com",
            "us-west-1"      => "hsm.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
