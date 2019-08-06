<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class HPCClient
 *
 * @package aliyun\sdk\services
 * @method HPC20161213\V20161213 V20161213() static
 * @method HPC20160603\V20160603 V20160603() static
 */
class HPC extends ProductAbstract
{
    use ProductTrait;

    protected $product = "HPC";

    protected $service_code = "hpc";

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
            "ap-northeast-1" => "hpc.aliyuncs.com",
            "ap-south-1"     => "hpc.aliyuncs.com",
            "ap-southeast-1" => "hpc.aliyuncs.com",
            "ap-southeast-2" => "hpc.aliyuncs.com",
            "ap-southeast-3" => "hpc.aliyuncs.com",
            "ap-southeast-5" => "hpc.aliyuncs.com",
            "cn-beijing"     => "hpc.aliyuncs.com",
            "cn-chengdu"     => "hpc.aliyuncs.com",
            "cn-hangzhou"    => "hpc.aliyuncs.com",
            "cn-hongkong"    => "hpc.aliyuncs.com",
            "cn-huhehaote"   => "hpc.aliyuncs.com",
            "cn-qingdao"     => "hpc.aliyuncs.com",
            "cn-shanghai"    => "hpc.aliyuncs.com",
            "cn-shenzhen"    => "hpc.aliyuncs.com",
            "cn-zhangjiakou" => "hpc.aliyuncs.com",
            "eu-central-1"   => "hpc.aliyuncs.com",
            "eu-west-1"      => "hpc.aliyuncs.com",
            "me-east-1"      => "hpc.aliyuncs.com",
            "us-east-1"      => "hpc.aliyuncs.com",
            "us-west-1"      => "hpc.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}