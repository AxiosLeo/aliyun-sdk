<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AfsClient
 *
 * @package aliyun\sdk\services
 * @method Afs20180112\V20180112 V20180112() static
 */
class Afs extends ProductAbstract
{
    use ProductTrait;

    protected $product = "afs";

    protected $service_code = "afs";

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
            "ap-northeast-1" => "afs.aliyuncs.com",
            "ap-south-1"     => "afs.aliyuncs.com",
            "ap-southeast-1" => "afs.aliyuncs.com",
            "ap-southeast-2" => "afs.aliyuncs.com",
            "ap-southeast-3" => "afs.aliyuncs.com",
            "ap-southeast-5" => "afs.aliyuncs.com",
            "cn-beijing"     => "afs.aliyuncs.com",
            "cn-chengdu"     => "afs.aliyuncs.com",
            "cn-hangzhou"    => "afs.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "afs.aliyuncs.com",
            "cn-huhehaote"   => "afs.aliyuncs.com",
            "cn-qingdao"     => "afs.aliyuncs.com",
            "cn-shanghai"    => "afs.aliyuncs.com",
            "cn-shenzhen"    => "afs.aliyuncs.com",
            "cn-zhangjiakou" => "afs.aliyuncs.com",
            "eu-central-1"   => "afs.aliyuncs.com",
            "eu-west-1"      => "afs.aliyuncs.com",
            "me-east-1"      => "afs.aliyuncs.com",
            "us-east-1"      => "afs.aliyuncs.com",
            "us-west-1"      => "afs.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
