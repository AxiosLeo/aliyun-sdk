<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BssClient
 *
 * @package aliyun\sdk\services
 * @method Bss20140714\V20140714 V20140714() static
 */
class Bss extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Bss";

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
            "ap-northeast-1" => "bss.aliyuncs.com",
            "ap-south-1"     => "bss.aliyuncs.com",
            "ap-southeast-1" => "bss.aliyuncs.com",
            "ap-southeast-2" => "bss.aliyuncs.com",
            "ap-southeast-3" => "bss.aliyuncs.com",
            "ap-southeast-5" => "bss.aliyuncs.com",
            "cn-beijing"     => "bss.aliyuncs.com",
            "cn-chengdu"     => "bss.aliyuncs.com",
            "cn-hangzhou"    => "bss.aliyuncs.com",
            "cn-hongkong"    => "bss.aliyuncs.com",
            "cn-huhehaote"   => "bss.aliyuncs.com",
            "cn-qingdao"     => "bss.aliyuncs.com",
            "cn-shanghai"    => "bss.aliyuncs.com",
            "cn-shenzhen"    => "bss.aliyuncs.com",
            "cn-zhangjiakou" => "bss.aliyuncs.com",
            "eu-central-1"   => "bss.aliyuncs.com",
            "eu-west-1"      => "bss.aliyuncs.com",
            "me-east-1"      => "bss.aliyuncs.com",
            "us-east-1"      => "bss.aliyuncs.com",
            "us-west-1"      => "bss.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}