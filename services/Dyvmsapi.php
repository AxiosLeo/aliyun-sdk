<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DyvmsapiClient
 *
 * @package aliyun\sdk\services
 * @method Dyvmsapi20170525\V20170525 V20170525() static
 */
class Dyvmsapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dyvmsapi";

    protected $service_code = "dyvmsapi";

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
            "ap-northeast-1" => "dyvmsapi.aliyuncs.com",
            "ap-south-1"     => "dyvmsapi.aliyuncs.com",
            "ap-southeast-1" => "dyvmsapi.aliyuncs.com",
            "ap-southeast-2" => "dyvmsapi.aliyuncs.com",
            "ap-southeast-3" => "dyvmsapi.aliyuncs.com",
            "ap-southeast-5" => "dyvmsapi.aliyuncs.com",
            "cn-beijing"     => "dyvmsapi.aliyuncs.com",
            "cn-chengdu"     => "dyvmsapi.aliyuncs.com",
            "cn-hangzhou"    => "dyvmsapi.aliyuncs.com",
            "cn-hongkong"    => "dyvmsapi.aliyuncs.com",
            "cn-huhehaote"   => "dyvmsapi.aliyuncs.com",
            "cn-qingdao"     => "dyvmsapi.aliyuncs.com",
            "cn-shanghai"    => "dyvmsapi.aliyuncs.com",
            "cn-shenzhen"    => "dyvmsapi.aliyuncs.com",
            "cn-zhangjiakou" => "dyvmsapi.aliyuncs.com",
            "eu-central-1"   => "dyvmsapi.aliyuncs.com",
            "eu-west-1"      => "dyvmsapi.aliyuncs.com",
            "me-east-1"      => "dyvmsapi.aliyuncs.com",
            "us-east-1"      => "dyvmsapi.aliyuncs.com",
            "us-west-1"      => "dyvmsapi.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}