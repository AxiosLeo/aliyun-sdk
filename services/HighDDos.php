<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class HighDDosClient
 *
 * @package aliyun\sdk\services
 * @method HighDDos20170920\V20170920 V20170920() static
 * @method HighDDos20160410\V20160410 V20160410() static
 * @method HighDDos20160401\V20160401 V20160401() static
 */
class HighDDos extends ProductAbstract
{
    use ProductTrait;

    protected $product = "HighDDos";

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
            "ap-northeast-1" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "ap-south-1"     => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "ap-southeast-1" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "ap-southeast-2" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "ap-southeast-3" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "ap-southeast-5" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-beijing"     => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-chengdu"     => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "eu-central-1"   => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "eu-west-1"      => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "me-east-1"      => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "us-east-1"      => "yd-highddos-cn-hangzhou.aliyuncs.com",
            "us-west-1"      => "yd-highddos-cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}