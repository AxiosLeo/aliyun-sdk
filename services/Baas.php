<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BaasClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Baas20181221\V20181221 V20181221() static
 * @method \aliyun\sdk\services\Baas20180731\V20180731 V20180731() static
 */
class Baas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Baas";

    protected $service_code = "";

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
            "ap-northeast-1" => "baas.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "baas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "baas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "baas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "baas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-5" => "baas.ap-northeast-1.aliyuncs.com",
            "cn-beijing"     => "baas.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "baas.aliyuncs.com",
            "cn-hangzhou"    => "baas.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "baas.aliyuncs.com",
            "cn-huhehaote"   => "baas.aliyuncs.com",
            "cn-qingdao"     => "baas.aliyuncs.com",
            "cn-shanghai"    => "baas.aliyuncs.com",
            "cn-shenzhen"    => "baas.aliyuncs.com",
            "cn-zhangjiakou" => "baas.aliyuncs.com",
            "eu-central-1"   => "baas.ap-northeast-1.aliyuncs.com",
            "eu-west-1"      => "baas.ap-northeast-1.aliyuncs.com",
            "me-east-1"      => "baas.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "baas.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "baas.ap-northeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}