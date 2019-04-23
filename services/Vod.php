<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class VodClient
 *
 * @package aliyun\sdk\services
 * @method Vod20170713\V20170713 V20170713() static
 * @method Vod20170510\V20170510 V20170510() static
 * @method Vod20170426\V20170426 V20170426() static
 * @method Vod20170420\V20170420 V20170420() static
 * @method Vod20170321\V20170321 V20170321() static
 * @method Vod20170314\V20170314 V20170314() static
 */
class Vod extends ProductAbstract
{
    use ProductTrait;

    protected $product = "vod";

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
            "ap-northeast-1" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "vod.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "vod.ap-northeast-1.aliyuncs.com",
            "ap-southeast-5" => "vod.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "vod.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "vod.aliyuncs.com",
            "cn-hangzhou"    => "vod.cn-shanghai.aliyuncs.com",
            "cn-hongkong"    => "vod.aliyuncs.com",
            "cn-huhehaote"   => "vod.aliyuncs.com",
            "cn-qingdao"     => "vod.aliyuncs.com",
            "cn-shanghai"    => "vod.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "vod.cn-shanghai.aliyuncs.com",
            "cn-zhangjiakou" => "vod.aliyuncs.com",
            "eu-central-1"   => "vod.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "vod.ap-northeast-1.aliyuncs.com",
            "me-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "vod.ap-northeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}