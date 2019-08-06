<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AliProbeClient
 *
 * @package aliyun\sdk\services
 * @method AliProbe20161222\V20161222 V20161222() static
 */
class AliProbe extends ProductAbstract
{
    use ProductTrait;

    protected $product = "AliProbe";

    protected $service_code = "";

    protected $credential = "RpcCredential";

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
            "ap-northeast-1" => "aliprobe.aliyuncs.com",
            "ap-south-1"     => "aliprobe.aliyuncs.com",
            "ap-southeast-1" => "aliprobe.aliyuncs.com",
            "ap-southeast-2" => "aliprobe.aliyuncs.com",
            "ap-southeast-3" => "aliprobe.aliyuncs.com",
            "ap-southeast-5" => "aliprobe.aliyuncs.com",
            "cn-beijing"     => "aliprobe.aliyuncs.com",
            "cn-chengdu"     => "aliprobe.aliyuncs.com",
            "cn-hangzhou"    => "aliprobe.aliyuncs.com",
            "cn-hongkong"    => "aliprobe.aliyuncs.com",
            "cn-huhehaote"   => "aliprobe.aliyuncs.com",
            "cn-qingdao"     => "aliprobe.aliyuncs.com",
            "cn-shanghai"    => "aliprobe.aliyuncs.com",
            "cn-shenzhen"    => "aliprobe.aliyuncs.com",
            "cn-zhangjiakou" => "aliprobe.aliyuncs.com",
            "eu-central-1"   => "aliprobe.aliyuncs.com",
            "eu-west-1"      => "aliprobe.aliyuncs.com",
            "me-east-1"      => "aliprobe.aliyuncs.com",
            "us-east-1"      => "aliprobe.aliyuncs.com",
            "us-west-1"      => "aliprobe.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}