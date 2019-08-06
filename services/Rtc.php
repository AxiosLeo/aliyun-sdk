<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RtcClient
 *
 * @package aliyun\sdk\services
 * @method Rtc20180111\V20180111 V20180111() static
 */
class Rtc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "rtc";

    protected $service_code = "rtc";

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
            "ap-northeast-1" => "rtc.aliyuncs.com",
            "ap-south-1"     => "rtc.aliyuncs.com",
            "ap-southeast-1" => "rtc.aliyuncs.com",
            "ap-southeast-2" => "rtc.aliyuncs.com",
            "ap-southeast-3" => "rtc.aliyuncs.com",
            "ap-southeast-5" => "rtc.aliyuncs.com",
            "cn-beijing"     => "rtc.aliyuncs.com",
            "cn-chengdu"     => "rtc.aliyuncs.com",
            "cn-hangzhou"    => "rtc.aliyuncs.com",
            "cn-hongkong"    => "rtc.aliyuncs.com",
            "cn-huhehaote"   => "rtc.aliyuncs.com",
            "cn-qingdao"     => "rtc.aliyuncs.com",
            "cn-shanghai"    => "rtc.aliyuncs.com",
            "cn-shenzhen"    => "rtc.aliyuncs.com",
            "cn-zhangjiakou" => "rtc.aliyuncs.com",
            "eu-central-1"   => "rtc.aliyuncs.com",
            "eu-west-1"      => "rtc.aliyuncs.com",
            "me-east-1"      => "rtc.aliyuncs.com",
            "us-east-1"      => "rtc.aliyuncs.com",
            "us-west-1"      => "rtc.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}