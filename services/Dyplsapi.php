<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DyplsapiClient
 *
 * @package aliyun\sdk\services
 * @method Dyplsapi20170525\V20170525 V20170525() static
 */
class Dyplsapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dyplsapi";

    protected $service_code = "dyplsapi";

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
            "ap-northeast-1" => "dyplsapi.aliyuncs.com",
            "ap-south-1"     => "dyplsapi.aliyuncs.com",
            "ap-southeast-1" => "dyplsapi.aliyuncs.com",
            "ap-southeast-2" => "dyplsapi.aliyuncs.com",
            "ap-southeast-3" => "dyplsapi.aliyuncs.com",
            "ap-southeast-5" => "dyplsapi.aliyuncs.com",
            "cn-beijing"     => "dyplsapi.aliyuncs.com",
            "cn-chengdu"     => "dyplsapi.aliyuncs.com",
            "cn-hangzhou"    => "dyplsapi.aliyuncs.com",
            "cn-hongkong"    => "dyplsapi.aliyuncs.com",
            "cn-huhehaote"   => "dyplsapi.aliyuncs.com",
            "cn-qingdao"     => "dyplsapi.aliyuncs.com",
            "cn-shanghai"    => "dyplsapi.aliyuncs.com",
            "cn-shenzhen"    => "dyplsapi.aliyuncs.com",
            "cn-zhangjiakou" => "dyplsapi.aliyuncs.com",
            "eu-central-1"   => "dyplsapi.aliyuncs.com",
            "eu-west-1"      => "dyplsapi.aliyuncs.com",
            "me-east-1"      => "dyplsapi.aliyuncs.com",
            "us-east-1"      => "dyplsapi.aliyuncs.com",
            "us-west-1"      => "dyplsapi.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}