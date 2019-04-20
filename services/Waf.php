<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class WafClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Waf20170930\V20170930 V20170930() static
 * @method \aliyun\sdk\services\Waf20170928\V20170928 V20170928() static
 * @method \aliyun\sdk\services\Waf20160718\V20160718 V20160718() static
 * @method \aliyun\sdk\services\Waf20160310\V20160310 V20160310() static
 */
class Waf extends ProductAbstract
{
    use ProductTrait;

    protected $product = "waf";

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
            "ap-northeast-1" => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "yw.aliyuncs.com",
            "cn-chengdu"     => "yw.aliyuncs.com",
            "cn-hangzhou"    => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "yw.aliyuncs.com",
            "cn-huhehaote"   => "yw.aliyuncs.com",
            "cn-qingdao"     => "yw.aliyuncs.com",
            "cn-shanghai"    => "yw.aliyuncs.com",
            "cn-shenzhen"    => "yw.aliyuncs.com",
            "cn-zhangjiakou" => "yw.aliyuncs.com",
            "eu-central-1"   => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "wafopenapi.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "wafopenapi.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}