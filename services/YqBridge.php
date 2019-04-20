<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class YqBridgeClient
 *
 * @package aliyun\sdk\services
 */
class YqBridge extends ProductAbstract
{
    use ProductTrait;

    protected $product = "YqBridge";

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
            "ap-northeast-1" => "yq-bridge.aliyuncs.com",
            "ap-south-1"     => "yq-bridge.aliyuncs.com",
            "ap-southeast-1" => "yq-bridge.aliyuncs.com",
            "ap-southeast-2" => "yq-bridge.aliyuncs.com",
            "ap-southeast-3" => "yq-bridge.aliyuncs.com",
            "ap-southeast-5" => "yq-bridge.aliyuncs.com",
            "cn-beijing"     => "yq-bridge.aliyuncs.com",
            "cn-chengdu"     => "yq-bridge.aliyuncs.com",
            "cn-hangzhou"    => "yq-bridge.aliyuncs.com",
            "cn-hongkong"    => "yq-bridge.aliyuncs.com",
            "cn-huhehaote"   => "yq-bridge.aliyuncs.com",
            "cn-qingdao"     => "yq-bridge.aliyuncs.com",
            "cn-shanghai"    => "yq-bridge.aliyuncs.com",
            "cn-shenzhen"    => "yq-bridge.aliyuncs.com",
            "cn-zhangjiakou" => "yq-bridge.aliyuncs.com",
            "eu-central-1"   => "yq-bridge.aliyuncs.com",
            "eu-west-1"      => "yq-bridge.aliyuncs.com",
            "me-east-1"      => "yq-bridge.aliyuncs.com",
            "us-east-1"      => "yq-bridge.aliyuncs.com",
            "us-west-1"      => "yq-bridge.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}