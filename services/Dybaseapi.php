<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DybaseapiClient
 *
 * @package aliyun\sdk\services
 * @method Dybaseapi20180501\V20180501 V20180501() static
 * @method Dybaseapi20170525\V20170525 V20170525() static
 */
class Dybaseapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dybaseapi";

    protected $service_code = "dybaseapi";

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
            "ap-northeast-1" => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "dybaseapi.aliyuncs.com",
            "cn-chengdu"     => "dybaseapi.aliyuncs.com",
            "cn-hangzhou"    => "dybaseapi.aliyuncs.com",
            "cn-hongkong"    => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "cn-huhehaote"   => "dybaseapi.aliyuncs.com",
            "cn-qingdao"     => "dybaseapi.aliyuncs.com",
            "cn-shanghai"    => "dybaseapi.aliyuncs.com",
            "cn-shenzhen"    => "dybaseapi.aliyuncs.com",
            "cn-zhangjiakou" => "dybaseapi.aliyuncs.com",
            "eu-central-1"   => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "dybaseapi.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "dybaseapi.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}