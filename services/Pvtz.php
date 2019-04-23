<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class PvtzClient
 *
 * @package aliyun\sdk\services
 * @method Pvtz20180101\V20180101 V20180101() static
 */
class Pvtz extends ProductAbstract
{
    use ProductTrait;

    protected $product = "pvtz";

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
            "ap-northeast-1" => "pvtz.aliyuncs.com",
            "ap-south-1"     => "pvtz.aliyuncs.com",
            "ap-southeast-1" => "pvtz.aliyuncs.com",
            "ap-southeast-2" => "pvtz.aliyuncs.com",
            "ap-southeast-3" => "pvtz.aliyuncs.com",
            "ap-southeast-5" => "pvtz.aliyuncs.com",
            "cn-beijing"     => "pvtz.aliyuncs.com",
            "cn-chengdu"     => "pvtz.aliyuncs.com",
            "cn-hangzhou"    => "pvtz.aliyuncs.com",
            "cn-hongkong"    => "pvtz.aliyuncs.com",
            "cn-huhehaote"   => "pvtz.aliyuncs.com",
            "cn-qingdao"     => "pvtz.aliyuncs.com",
            "cn-shanghai"    => "pvtz.aliyuncs.com",
            "cn-shenzhen"    => "pvtz.aliyuncs.com",
            "cn-zhangjiakou" => "pvtz.aliyuncs.com",
            "eu-central-1"   => "pvtz.aliyuncs.com",
            "eu-west-1"      => "pvtz.aliyuncs.com",
            "me-east-1"      => "pvtz.aliyuncs.com",
            "us-east-1"      => "pvtz.aliyuncs.com",
            "us-west-1"      => "pvtz.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}