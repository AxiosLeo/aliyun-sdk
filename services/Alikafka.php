<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AlikafkaClient
 *
 * @package aliyun\sdk\services
 * @method Alikafka20181015\V20181015 V20181015() static
 */
class Alikafka extends ProductAbstract
{
    use ProductTrait;

    protected $product = "alikafka";

    protected $service_code = "alikafka";

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
            "ap-northeast-1" => "alikafka.aliyuncs.com",
            "ap-south-1"     => "alikafka.aliyuncs.com",
            "ap-southeast-1" => "alikafka.aliyuncs.com",
            "ap-southeast-2" => "alikafka.aliyuncs.com",
            "ap-southeast-3" => "alikafka.aliyuncs.com",
            "ap-southeast-5" => "alikafka.aliyuncs.com",
            "cn-beijing"     => "alikafka.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "alikafka.aliyuncs.com",
            "cn-hangzhou"    => "alikafka.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "alikafka.aliyuncs.com",
            "cn-huhehaote"   => "alikafka.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "alikafka.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "alikafka.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "alikafka.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "alikafka.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "alikafka.aliyuncs.com",
            "eu-west-1"      => "alikafka.aliyuncs.com",
            "me-east-1"      => "alikafka.aliyuncs.com",
            "us-east-1"      => "alikafka.aliyuncs.com",
            "us-west-1"      => "alikafka.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}