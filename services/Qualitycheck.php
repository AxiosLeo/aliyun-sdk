<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class QualitycheckClient
 *
 * @package aliyun\sdk\services
 * @method Qualitycheck20190115\V20190115 V20190115() static
 * @method Qualitycheck20160801\V20160801 V20160801() static
 */
class Qualitycheck extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Qualitycheck";

    protected $service_code = "";

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
            "ap-northeast-1" => "qualitycheck.aliyuncs.com",
            "ap-south-1"     => "qualitycheck.aliyuncs.com",
            "ap-southeast-1" => "qualitycheck.aliyuncs.com",
            "ap-southeast-2" => "qualitycheck.aliyuncs.com",
            "ap-southeast-3" => "qualitycheck.aliyuncs.com",
            "ap-southeast-5" => "qualitycheck.aliyuncs.com",
            "cn-beijing"     => "qualitycheck.aliyuncs.com",
            "cn-chengdu"     => "qualitycheck.aliyuncs.com",
            "cn-hangzhou"    => "qualitycheck.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "qualitycheck.aliyuncs.com",
            "cn-huhehaote"   => "qualitycheck.aliyuncs.com",
            "cn-qingdao"     => "qualitycheck.aliyuncs.com",
            "cn-shanghai"    => "qualitycheck.aliyuncs.com",
            "cn-shenzhen"    => "qualitycheck.aliyuncs.com",
            "cn-zhangjiakou" => "qualitycheck.aliyuncs.com",
            "eu-central-1"   => "qualitycheck.aliyuncs.com",
            "eu-west-1"      => "qualitycheck.aliyuncs.com",
            "me-east-1"      => "qualitycheck.aliyuncs.com",
            "us-east-1"      => "qualitycheck.aliyuncs.com",
            "us-west-1"      => "qualitycheck.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
