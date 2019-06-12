<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class VpcClient
 *
 * @package aliyun\sdk\services
 * @method Vpc20160428\V20160428 V20160428() static
 */
class Vpc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Vpc";

    protected $service_code = "vpc";

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
            "ap-northeast-1" => "vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "vpc.aliyuncs.com",
            "ap-southeast-2" => "vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "vpc.aliyuncs.com",
            "cn-chengdu"     => "vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "vpc.aliyuncs.com",
            "cn-hongkong"    => "vpc.aliyuncs.com",
            "cn-huhehaote"   => "vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "vpc.aliyuncs.com",
            "cn-shenzhen"    => "vpc.aliyuncs.com",
            "cn-zhangjiakou" => "vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "vpc.aliyuncs.com",
            "us-west-1"      => "vpc.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}