<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class PolardbClient
 *
 * @package aliyun\sdk\services
 * @method Polardb20170801\V20170801 V20170801() static
 */
class Polardb extends ProductAbstract
{
    use ProductTrait;

    protected $product = "polardb";

    protected $service_code = "polardb";

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
            "ap-northeast-1" => "polardb.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "polardb.aliyuncs.com",
            "ap-southeast-1" => "polardb.aliyuncs.com",
            "ap-southeast-2" => "polardb.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "polardb.aliyuncs.com",
            "ap-southeast-5" => "polardb.aliyuncs.com",
            "cn-beijing"     => "polardb.aliyuncs.com",
            "cn-chengdu"     => "polardb.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "polardb.aliyuncs.com",
            "cn-hongkong"    => "polardb.aliyuncs.com",
            "cn-huhehaote"   => "polardb.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "polardb.aliyuncs.com",
            "cn-shanghai"    => "polardb.aliyuncs.com",
            "cn-shenzhen"    => "polardb.aliyuncs.com",
            "cn-zhangjiakou" => "polardb.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "polardb.aliyuncs.com",
            "eu-west-1"      => "polardb.eu-west-1.aliyuncs.com",
            "me-east-1"      => "polardb.me-east-1.aliyuncs.com",
            "us-east-1"      => "polardb.aliyuncs.com",
            "us-west-1"      => "polardb.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
