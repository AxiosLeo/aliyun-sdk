<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SnsuapiClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Snsuapi20180709\V20180709 V20180709() static
 */
class Snsuapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Snsuapi";

    protected $service_code = "snsuapi";

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
            "ap-northeast-1" => "snsuapi.aliyuncs.com",
            "ap-south-1"     => "snsuapi.aliyuncs.com",
            "ap-southeast-1" => "snsuapi.aliyuncs.com",
            "ap-southeast-2" => "snsuapi.aliyuncs.com",
            "ap-southeast-3" => "snsuapi.aliyuncs.com",
            "ap-southeast-5" => "snsuapi.aliyuncs.com",
            "cn-beijing"     => "snsuapi.aliyuncs.com",
            "cn-chengdu"     => "snsuapi.aliyuncs.com",
            "cn-hangzhou"    => "snsuapi.aliyuncs.com",
            "cn-hongkong"    => "snsuapi.aliyuncs.com",
            "cn-huhehaote"   => "snsuapi.aliyuncs.com",
            "cn-qingdao"     => "snsuapi.aliyuncs.com",
            "cn-shanghai"    => "snsuapi.aliyuncs.com",
            "cn-shenzhen"    => "snsuapi.aliyuncs.com",
            "cn-zhangjiakou" => "snsuapi.aliyuncs.com",
            "eu-central-1"   => "snsuapi.aliyuncs.com",
            "eu-west-1"      => "snsuapi.aliyuncs.com",
            "me-east-1"      => "snsuapi.aliyuncs.com",
            "us-east-1"      => "snsuapi.aliyuncs.com",
            "us-west-1"      => "snsuapi.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}