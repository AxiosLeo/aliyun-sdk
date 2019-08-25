<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class GpdbClient
 *
 * @package aliyun\sdk\services
 * @method Gpdb20160503\V20160503 V20160503() static
 */
class Gpdb extends ProductAbstract
{
    use ProductTrait;

    protected $product = "gpdb";

    protected $service_code = "gpdb";

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
            "ap-northeast-1" => "gpdb.aliyuncs.com",
            "ap-south-1"     => "gpdb.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "gpdb.aliyuncs.com",
            "ap-southeast-2" => "gpdb.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "gpdb.aliyuncs.com",
            "ap-southeast-5" => "gpdb.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "gpdb.aliyuncs.com",
            "cn-chengdu"     => "gpdb.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "gpdb.aliyuncs.com",
            "cn-hongkong"    => "gpdb.aliyuncs.com",
            "cn-huhehaote"   => "gpdb.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "gpdb.aliyuncs.com",
            "cn-shanghai"    => "gpdb.aliyuncs.com",
            "cn-shenzhen"    => "gpdb.aliyuncs.com",
            "cn-zhangjiakou" => "gpdb.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "gpdb.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "gpdb.eu-west-1.aliyuncs.com",
            "me-east-1"      => "gpdb.me-east-1.aliyuncs.com",
            "us-east-1"      => "gpdb.aliyuncs.com",
            "us-west-1"      => "gpdb.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
