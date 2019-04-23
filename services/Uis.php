<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class UisClient
 *
 * @package aliyun\sdk\services
 * @method Uis20180821\V20180821 V20180821() static
 */
class Uis extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Uis";

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
            "ap-northeast-1" => "uis.aliyuncs.com",
            "ap-south-1"     => "uis.aliyuncs.com",
            "ap-southeast-1" => "uis.aliyuncs.com",
            "ap-southeast-2" => "uis.aliyuncs.com",
            "ap-southeast-3" => "uis.aliyuncs.com",
            "ap-southeast-5" => "uis.aliyuncs.com",
            "cn-beijing"     => "uis.aliyuncs.com",
            "cn-chengdu"     => "uis.aliyuncs.com",
            "cn-hangzhou"    => "uis.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "uis.aliyuncs.com",
            "cn-huhehaote"   => "uis.aliyuncs.com",
            "cn-qingdao"     => "uis.aliyuncs.com",
            "cn-shanghai"    => "uis.aliyuncs.com",
            "cn-shenzhen"    => "uis.aliyuncs.com",
            "cn-zhangjiakou" => "uis.aliyuncs.com",
            "eu-central-1"   => "uis.aliyuncs.com",
            "eu-west-1"      => "uis.aliyuncs.com",
            "me-east-1"      => "uis.aliyuncs.com",
            "us-east-1"      => "uis.aliyuncs.com",
            "us-west-1"      => "uis.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}