<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RdsClient
 *
 * @package aliyun\sdk\services
 * @method Rds20140815\V20140815 V20140815() static
 * @method Rds20130528\V20130528 V20130528() static
 * @method Rds20120615\V20120615 V20120615() static
 */
class Rds extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Rds";

    protected $service_code = "rds";

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
            "ap-northeast-1" => "rds.aliyuncs.com",
            "ap-south-1"     => "rds.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "rds.aliyuncs.com",
            "ap-southeast-2" => "rds.aliyuncs.com",
            "ap-southeast-3" => "rds.aliyuncs.com",
            "ap-southeast-5" => "rds.aliyuncs.com",
            "cn-beijing"     => "rds.aliyuncs.com",
            "cn-chengdu"     => "rds.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "rds.aliyuncs.com",
            "cn-hongkong"    => "rds.aliyuncs.com",
            "cn-huhehaote"   => "rds.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "rds.aliyuncs.com",
            "cn-shanghai"    => "rds.aliyuncs.com",
            "cn-shenzhen"    => "rds.aliyuncs.com",
            "cn-zhangjiakou" => "rds.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "rds.aliyuncs.com",
            "eu-west-1"      => "rds.eu-west-1.aliyuncs.com",
            "me-east-1"      => "rds.aliyuncs.com",
            "us-east-1"      => "rds.aliyuncs.com",
            "us-west-1"      => "rds.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
