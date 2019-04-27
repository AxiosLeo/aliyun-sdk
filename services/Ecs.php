<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EcsClient
 *
 * @package aliyun\sdk\services
 * @method Ecs20160314\V20160314 V20160314() static
 * @method Ecs20140526\V20140526 V20140526() static
 */
class Ecs extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ecs";

    protected $service_code = "ecs";

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
            "ap-northeast-1" => "ecs.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "ecs.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "ecs.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "ecs.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "ecs.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "ecs.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "ecs.aliyuncs.com",
            "cn-chengdu"     => "ecs.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "ecs.aliyuncs.com",
            "cn-hongkong"    => "ecs.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "ecs.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ecs.aliyuncs.com",
            "cn-shanghai"    => "ecs.aliyuncs.com",
            "cn-shenzhen"    => "ecs.aliyuncs.com",
            "cn-zhangjiakou" => "ecs.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ecs.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "ecs.eu-west-1.aliyuncs.com",
            "me-east-1"      => "ecs.me-east-1.aliyuncs.com",
            "us-east-1"      => "ecs.us-east-1.aliyuncs.com",
            "us-west-1"      => "ecs.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}