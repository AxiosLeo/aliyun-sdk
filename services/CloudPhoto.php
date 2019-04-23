<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudPhotoClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\CloudPhoto20170711\V20170711 V20170711() static
 * @method \aliyun\sdk\services\CloudPhoto20170511\V20170511 V20170511() static
 */
class CloudPhoto extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CloudPhoto";

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
            "ap-northeast-1" => "cloudphoto.aliyuncs.com",
            "ap-south-1"     => "cloudphoto.aliyuncs.com",
            "ap-southeast-1" => "cloudphoto.aliyuncs.com",
            "ap-southeast-2" => "cloudphoto.aliyuncs.com",
            "ap-southeast-3" => "cloudphoto.aliyuncs.com",
            "ap-southeast-5" => "cloudphoto.aliyuncs.com",
            "cn-beijing"     => "cloudphoto.aliyuncs.com",
            "cn-chengdu"     => "cloudphoto.aliyuncs.com",
            "cn-hangzhou"    => "cloudphoto.aliyuncs.com",
            "cn-hongkong"    => "cloudphoto.aliyuncs.com",
            "cn-huhehaote"   => "cloudphoto.aliyuncs.com",
            "cn-qingdao"     => "cloudphoto.aliyuncs.com",
            "cn-shanghai"    => "cloudphoto.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "cloudphoto.aliyuncs.com",
            "cn-zhangjiakou" => "cloudphoto.aliyuncs.com",
            "eu-central-1"   => "cloudphoto.aliyuncs.com",
            "eu-west-1"      => "cloudphoto.aliyuncs.com",
            "me-east-1"      => "cloudphoto.aliyuncs.com",
            "us-east-1"      => "cloudphoto.aliyuncs.com",
            "us-west-1"      => "cloudphoto.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}