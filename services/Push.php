<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class PushClient
 *
 * @package aliyun\sdk\services
 * @method Push20160801\V20160801 V20160801() static
 * @method Push20150827\V20150827 V20150827() static
 */
class Push extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Push";

    protected $service_code = "push";

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
            "ap-northeast-1" => "cloudpush.aliyuncs.com",
            "ap-south-1"     => "cloudpush.aliyuncs.com",
            "ap-southeast-1" => "cloudpush.aliyuncs.com",
            "ap-southeast-2" => "cloudpush.aliyuncs.com",
            "ap-southeast-3" => "cloudpush.aliyuncs.com",
            "ap-southeast-5" => "cloudpush.aliyuncs.com",
            "cn-beijing"     => "cloudpush.aliyuncs.com",
            "cn-chengdu"     => "cloudpush.aliyuncs.com",
            "cn-hangzhou"    => "cloudpush.aliyuncs.com",
            "cn-hongkong"    => "cloudpush.aliyuncs.com",
            "cn-huhehaote"   => "cloudpush.aliyuncs.com",
            "cn-qingdao"     => "cloudpush.aliyuncs.com",
            "cn-shanghai"    => "cloudpush.aliyuncs.com",
            "cn-shenzhen"    => "cloudpush.aliyuncs.com",
            "cn-zhangjiakou" => "cloudpush.aliyuncs.com",
            "eu-central-1"   => "cloudpush.aliyuncs.com",
            "eu-west-1"      => "cloudpush.aliyuncs.com",
            "me-east-1"      => "cloudpush.aliyuncs.com",
            "us-east-1"      => "cloudpush.aliyuncs.com",
            "us-west-1"      => "cloudpush.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}