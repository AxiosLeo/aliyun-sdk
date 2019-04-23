<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DypnsapiClient
 *
 * @package aliyun\sdk\services
 * @method Dypnsapi20170525\V20170525 V20170525() static
 */
class Dypnsapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dypnsapi";

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
            "ap-northeast-1" => "dypnsapi.aliyuncs.com",
            "ap-south-1"     => "dypnsapi.aliyuncs.com",
            "ap-southeast-1" => "dypnsapi.aliyuncs.com",
            "ap-southeast-2" => "dypnsapi.aliyuncs.com",
            "ap-southeast-3" => "dypnsapi.aliyuncs.com",
            "ap-southeast-5" => "dypnsapi.aliyuncs.com",
            "cn-beijing"     => "dypnsapi.aliyuncs.com",
            "cn-chengdu"     => "dypnsapi.aliyuncs.com",
            "cn-hangzhou"    => "dypnsapi.aliyuncs.com",
            "cn-hongkong"    => "dypnsapi.aliyuncs.com",
            "cn-huhehaote"   => "dypnsapi.aliyuncs.com",
            "cn-qingdao"     => "dypnsapi.aliyuncs.com",
            "cn-shanghai"    => "dypnsapi.aliyuncs.com",
            "cn-shenzhen"    => "dypnsapi.aliyuncs.com",
            "cn-zhangjiakou" => "dypnsapi.aliyuncs.com",
            "eu-central-1"   => "dypnsapi.aliyuncs.com",
            "eu-west-1"      => "dypnsapi.aliyuncs.com",
            "me-east-1"      => "dypnsapi.aliyuncs.com",
            "us-east-1"      => "dypnsapi.aliyuncs.com",
            "us-west-1"      => "dypnsapi.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}