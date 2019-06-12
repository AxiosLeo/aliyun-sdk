<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EcsIncClient
 *
 * @package aliyun\sdk\services
 * @method EcsInc20160314\V20160314 V20160314() static
 */
class EcsInc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "EcsInc";

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
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "eu-west-1",
            "us-east-1",
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "ecs.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "ecs.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "ecs-cn-hangzhou.aliyuncs.com",
            "ap-southeast-2" => "ecs.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "ecs.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "ecs.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "ecs.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "ecs-cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "ecs.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ecs.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "ecs.eu-west-1.aliyuncs.com",
            "us-east-1"      => "ecs-cn-hangzhou.aliyuncs.com",
            "us-west-1"      => "ecs-cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}