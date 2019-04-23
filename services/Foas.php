<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class FoasClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Foas20181111\V20181111 V20181111() static
 */
class Foas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "foas";

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
            "ap-northeast-1" => "foas.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "foas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "foas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "foas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "foas.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "foas.ap-northeast-1.aliyuncs.com",
            "cn-beijing"     => "foas.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "foas.aliyuncs.com",
            "cn-hangzhou"    => "foas.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "foas.aliyuncs.com",
            "cn-huhehaote"   => "foas.aliyuncs.com",
            "cn-qingdao"     => "foas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "foas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "foas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "foas.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "foas.ap-northeast-1.aliyuncs.com",
            "eu-west-1"      => "foas.ap-northeast-1.aliyuncs.com",
            "me-east-1"      => "foas.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "foas.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "foas.ap-northeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}