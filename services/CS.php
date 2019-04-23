<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CSClient
 *
 * @package aliyun\sdk\services
 * @method CS28180418\V28180418 V28180418() static
 * @method CS20180418\V20180418 V20180418() static
 * @method CS20180417\V20180417 V20180417() static
 * @method CS20151215\V20151215 V20151215() static
 */
class CS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CS";

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
            "ap-northeast-1" => "cs.aliyuncs.com",
            "ap-south-1"     => "cs.aliyuncs.com",
            "ap-southeast-1" => "cs.aliyuncs.com",
            "ap-southeast-2" => "cs.aliyuncs.com",
            "ap-southeast-3" => "cs.aliyuncs.com",
            "ap-southeast-5" => "cs.aliyuncs.com",
            "cn-beijing"     => "cs.aliyuncs.com",
            "cn-chengdu"     => "cs.aliyuncs.com",
            "cn-hangzhou"    => "cs.aliyuncs.com",
            "cn-hongkong"    => "cs.aliyuncs.com",
            "cn-huhehaote"   => "cs.aliyuncs.com",
            "cn-qingdao"     => "cs.aliyuncs.com",
            "cn-shanghai"    => "cs.aliyuncs.com",
            "cn-shenzhen"    => "cs.aliyuncs.com",
            "cn-zhangjiakou" => "cs.aliyuncs.com",
            "eu-central-1"   => "cs.aliyuncs.com",
            "eu-west-1"      => "cs.aliyuncs.com",
            "me-east-1"      => "cs.aliyuncs.com",
            "us-east-1"      => "cs.aliyuncs.com",
            "us-west-1"      => "cs.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}