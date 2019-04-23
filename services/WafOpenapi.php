<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class WafOpenapiClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\WafOpenapi20180117\V20180117 V20180117() static
 * @method \aliyun\sdk\services\WafOpenapi20170930\V20170930 V20170930() static
 * @method \aliyun\sdk\services\WafOpenapi20161111\V20161111 V20161111() static
 */
class WafOpenapi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "waf-openapi";

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
            "ap-northeast-1" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "ap-south-1"     => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "ap-southeast-1" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "ap-southeast-2" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "ap-southeast-3" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "ap-southeast-5" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-beijing"     => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-chengdu"     => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "eu-central-1"   => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "eu-west-1"      => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "me-east-1"      => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "us-east-1"      => "wafopenapi.cn-hangzhou.aliyuncs.com",
            "us-west-1"      => "wafopenapi.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}