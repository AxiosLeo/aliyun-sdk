<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RdcClient
 *
 * @package aliyun\sdk\services
 * @method Rdc20180821\V20180821 V20180821() static
 * @method Rdc20180816\V20180816 V20180816() static
 * @method Rdc20180426\V20180426 V20180426() static
 * @method Rdc20180104\V20180104 V20180104() static
 */
class Rdc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Rdc";

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
            "ap-northeast-1" => "rdc.aliyuncs.test",
            "ap-south-1"     => "rdc.aliyuncs.test",
            "ap-southeast-1" => "rdc.aliyuncs.test",
            "ap-southeast-2" => "rdc.aliyuncs.test",
            "ap-southeast-3" => "rdc.aliyuncs.test",
            "ap-southeast-5" => "rdc.aliyuncs.test",
            "cn-beijing"     => "rdc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "rdc.aliyuncs.test",
            "cn-hangzhou"    => "rdc.aliyuncs.test",
            "cn-hongkong"    => "rdc.aliyuncs.test",
            "cn-huhehaote"   => "rdc.aliyuncs.test",
            "cn-qingdao"     => "rdc.aliyuncs.test",
            "cn-shanghai"    => "rdc.aliyuncs.test",
            "cn-shenzhen"    => "rdc.aliyuncs.test",
            "cn-zhangjiakou" => "rdc.aliyuncs.test",
            "eu-central-1"   => "rdc.aliyuncs.test",
            "eu-west-1"      => "rdc.aliyuncs.test",
            "me-east-1"      => "rdc.aliyuncs.test",
            "us-east-1"      => "rdc.aliyuncs.test",
            "us-west-1"      => "rdc.aliyuncs.test",
        ],
        "internal" => [
        ]
    ];
}