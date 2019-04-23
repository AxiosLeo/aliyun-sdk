<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DysmsapiClient
 *
 * @package aliyun\sdk\services
 * @method Dysmsapi20180501\V20180501 V20180501() static
 * @method Dysmsapi20170525\V20170525 V20170525() static
 */
class Dysmsapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dysmsapi";

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
            "ap-northeast-1" => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "dysmsapi.aliyuncs.com",
            "cn-chengdu"     => "dysmsapi.aliyuncs.com",
            "cn-hangzhou"    => "dysmsapi.aliyuncs.com",
            "cn-hongkong"    => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "cn-huhehaote"   => "dysmsapi.aliyuncs.com",
            "cn-qingdao"     => "dysmsapi.aliyuncs.com",
            "cn-shanghai"    => "dysmsapi.aliyuncs.com",
            "cn-shenzhen"    => "dysmsapi.aliyuncs.com",
            "cn-zhangjiakou" => "dysmsapi.aliyuncs.com",
            "eu-central-1"   => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "dysmsapi.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "dysmsapi.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}