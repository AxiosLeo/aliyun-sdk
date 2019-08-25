<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EciClient
 *
 * @package aliyun\sdk\services
 * @method Eci20180808\V20180808 V20180808() static
 */
class Eci extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Eci";

    protected $service_code = "eci";

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
            "ap-northeast-1" => "eci.aliyuncs.com",
            "ap-south-1"     => "eci.aliyuncs.com",
            "ap-southeast-1" => "eci.aliyuncs.com",
            "ap-southeast-2" => "eci.aliyuncs.com",
            "ap-southeast-3" => "eci.aliyuncs.com",
            "ap-southeast-5" => "eci.aliyuncs.com",
            "cn-beijing"     => "eci.aliyuncs.com",
            "cn-chengdu"     => "eci.aliyuncs.com",
            "cn-hangzhou"    => "eci.aliyuncs.com",
            "cn-hongkong"    => "eci.aliyuncs.com",
            "cn-huhehaote"   => "eci.aliyuncs.com",
            "cn-qingdao"     => "eci.aliyuncs.com",
            "cn-shanghai"    => "eci.aliyuncs.com",
            "cn-shenzhen"    => "eci.aliyuncs.com",
            "cn-zhangjiakou" => "eci.aliyuncs.com",
            "eu-central-1"   => "eci.aliyuncs.com",
            "eu-west-1"      => "eci.aliyuncs.com",
            "me-east-1"      => "eci.aliyuncs.com",
            "us-east-1"      => "eci.aliyuncs.com",
            "us-west-1"      => "eci.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
